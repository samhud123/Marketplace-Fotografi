<?php

namespace App\Controllers;

use App\Models\CommentModel;
use App\Models\OrderModel;
use App\Models\ServiceModel;
use Myth\Auth\Models\UserModel;

class Customer extends BaseController
{
    protected $orderModel, $userModel;

    public function __construct()
    {
        $this->orderModel = new OrderModel();
        $this->userModel = new UserModel();
    }

    public function index(): string
    {
        $data = [
            'title' => 'Customer | Profile'
        ];
        return view('customer/index', $data);
    }

    public function saveProfile()
    {
        $profile = $this->userModel->where('id', user_id())->first();

        if ($profile->username == $this->request->getPost('username')) {
            $rule_username = 'required';
        } else {
            $rule_username = 'required|is_unique[users.username, id,' . user_id() . ']';
        }

        if ($profile->email == $this->request->getPost('email')) {
            $rule_email = 'required';
        } else {
            $rule_email = 'required|valid_email|is_unique[users.email,id,' . user_id() . ']';
        }

        $validation = [
            'username'  => $rule_username,
            'email'     => $rule_email
        ];

        if (!$this->validate($validation)) {
            return redirect()->to('/customer')->withInput()->with('errors', $this->validator->getErrors());
        } else {
            $this->userModel->update(user_id(), [
                'nama'      => $this->request->getPost('fullname'),
                'username'  => $this->request->getPost('username'),
                'email'     => $this->request->getPost('email'),
                'no_tlp'    => $this->request->getPost('phone'),
                'alamat'    => $this->request->getPost('address')
            ]);

            //flash message
            session()->setFlashdata('message', 'Successfully update profile');
            return redirect()->to('/customer');
        }
    }

    public function updateFoto()
    {
        $validation = [
            'picture'  => 'max_size[picture,1024]|is_image[picture]|mime_in[picture,image/jpg,image/jpeg,image/png]'
        ];

        if (!$this->validate($validation)) {
            return redirect()->to('/customer')->withInput()->with('errors', $this->validator->getErrors());
        } else {
            // get picture
            $picture = $this->request->getFile('picture');
            // validasi upload
            if ($picture->getError() == 4) {
                return redirect()->to('/customer')->withInput()->with('errors', 'What you entered is not an image');
            } else {
                // generate nama sampul random
                $namePicture = $picture->getRandomName();
                // move file to folder img
                $picture->move('img/customers', $namePicture);
            }

            $this->userModel->update(user_id(), [
                'foto' => $namePicture,
            ]);

            //flash message
            session()->setFlashdata('message', 'Successfully update photo');
            return redirect()->to('/customer');
        }
    }

    public function order()
    {
        $data = [
            'title' => 'Customer | Order',
            'orders' => $this->orderModel->getNewOrders(user_id())
        ];
        return view('customer/orders', $data);
    }

    public function orderDetail($orderId)
    {
        $data = [
            'title' => 'Customer | Order',
            'order' => $this->orderModel->getOrderBuyerById($orderId, user_id())
        ];
        return view('customer/order_detail', $data);
    }

    public function history()
    {
        $comment = new CommentModel();

        $data = [
            'title' => 'Customer | History',
            'orders' => $this->orderModel->getNewOrders(user_id()),
            // 'comments' => $comment->where('buyer_id', user_id())->findAll()
        ];
        return view('customer/history', $data);
    }

    public function historyDetail($orderId)
    {
        $data = [
            'title' => 'Customer | History',
            'order' => $this->orderModel->getOrderBuyerById($orderId, user_id())
        ];
        return view('customer/history_detail', $data);
    }

    public function comment($orderId)
    {
        $data = [
            'title' => 'Customer | History',
            'order' => $this->orderModel->getOrderBuyerById($orderId, user_id())
        ];
        return view('customer/comment', $data);
    }

    public function postComment($orderId)
    {
        $comment = new CommentModel();
        $service_id = $this->orderModel->select('service_id')->where('order_id', $orderId)->first();

        $comment->insert([
            'buyer_id' => user_id(),
            'order_id' => $orderId,
            'service_id' => $service_id,
            'rating' => $this->request->getPost('star'),
            'comment' => $this->request->getPost('comment'),
            'created_at' => date('Y-m-d H:i:s')
        ]);

        session()->setFlashdata('message', 'Comment sent');
        return redirect()->to('/customer/history');
    }

    public function cancel($orderId)
    {
        $this->orderModel->update($orderId, [
            'status_order' => 'cancelled'
        ]);

        return redirect()->to('/customer/order');
    }

    public function finish($orderId)
    {
        $this->orderModel->update($orderId, [
            'status_order' => 'finished'
        ]);

        return redirect()->to('/customer/order');
    }
}
