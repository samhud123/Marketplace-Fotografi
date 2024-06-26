<?php

namespace App\Controllers;

use App\Models\OrderModel;
use App\Models\ServiceModel;
use Myth\Auth\Models\UserModel;

class Mitra extends BaseController
{
    public function index(): string
    {
        $orderModel = new OrderModel();
        $serviceModel = new ServiceModel();

        $data = [
            'title' => 'Mitra | Dashboard',
            'orders_comein' => $orderModel->where('mitra_id', user_id())->where('status_order', 'process')->orWhere('status_order', 'approved')->countAllResults(),
            'orders_complate' => $orderModel->where('mitra_id', user_id())->where('status_order', 'finished')->countAllResults(),
            'orders_failed' => $orderModel->where('mitra_id', user_id())->where('status_order', 'rejected')->orWhere('status_order', 'cancelled')->countAllResults(),
            'total_service' => $serviceModel->where('user_id', user_id())->countAllResults(),
        ];
        return view('mitra/index', $data);
    }

    public function profile()
    {
        $data = [
            'title' => 'Mitra | Profile'
        ];
        return view('mitra/profile', $data);
    }

    public function editProfile()
    {
        $data = [
            'title' => 'Mitra | Profile'
        ];
        return view('mitra/edit-profile', $data);
    }

    public function saveProfile()
    {
        $user = new UserModel();

        $profile = $user->where('id', user_id())->first();

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
            'email'     => $rule_email,
            'picture'   => 'max_size[picture,1024]|is_image[picture]|mime_in[picture,image/jpg,image/jpeg,image/png]'
        ];

        if (!$this->validate($validation)) {
            return redirect()->to('/mitra/profile/edit')->withInput()->with('errors', $this->validator->getErrors());
        } else {
            // get picture
            $picture = $this->request->getFile('picture');
            // validasi upload
            if ($picture->getError() == 4) {
                $namePicture = $this->request->getPost('fotoLama');
            } else {
                // generate nama sampul random
                $namePicture = $picture->getRandomName();
                // move file to folder img
                $picture->move('img/mitra/profile', $namePicture);
            }

            $user->update(user_id(), [
                'nama'      => $this->request->getPost('nama'),
                'username'  => $this->request->getPost('username'),
                'email'     => $this->request->getPost('email'),
                'no_tlp'    => $this->request->getPost('phone'),
                'alamat'    => $this->request->getPost('address'),
                'foto'      => $namePicture,
            ]);

            //flash message
            session()->setFlashdata('message', 'Successfully update profile');
            return redirect()->to('/mitra/profile');
        }
    }
}
