<?php

namespace App\Controllers;

use App\Models\GalleryModel;
use App\Models\OrderModel;
use App\Models\ServiceModel;
use Myth\Auth\Models\UserModel;

class Home extends BaseController
{
    protected $serviceModel, $orderModal, $userModel, $galleryModel;

    public function __construct()
    {
        $this->serviceModel = new ServiceModel();
        $this->orderModal = new OrderModel();
        $this->userModel = new UserModel();
        $this->galleryModel = new GalleryModel();
    }

    public function index(): string
    {
        $data = [
            'title' => 'FOTOGRAFI'
        ];
        return view('index', $data);
    }

    public function order()
    {
        $serviceId = $this->request->getGet('service');

        $data = [
            'service' => $this->serviceModel->where('service_id', $serviceId)->first()
        ];
        return view('order', $data);
    }

    public function attemptOrder()
    {
        $this->orderModal->insert([
            'buyer_id' => user_id(),
            'mitra_id' => $this->request->getPost('mitraId'),
            'service_id' => $this->request->getPost('serviceId'),
            'date'     => $this->request->getPost('date'),
            'message'     => $this->request->getPost('message'),
        ]);

        //flash message
        session()->setFlashdata('message', 'Order successful, waiting for mitra confirmation...');
        return redirect()->to('/customer/order');
    }

    public function mitra($id)
    {
        $mitra = $this->userModel->where('id', $id)->first();
        $data = [
            'mitra' => $mitra, 
            'galleries' =>$this->galleryModel->where('user_id', $id)->findAll()
        ];

        return view('mitra', $data);
    }
}
