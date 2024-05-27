<?php

namespace App\Controllers;

use App\Models\OrderModel;

class MitraOrders extends BaseController
{
    protected $orderModel;

    public function __construct()
    {
        $this->orderModel = new OrderModel();
    }

    public function index(): string
    {
        $data = [
            'title' => 'Mitra | Orders',
            'orders' => $this->orderModel->getOrdersMitra(user_id())
        ];
        return view('mitra/orders/index', $data);
    }

    public function detail($orderId)
    {
        $data = [
            'title' => 'Mitra | Orders',
            'order' => $this->orderModel->getOrderById($orderId)
        ];
        return view('mitra/orders/detail', $data);
    }

    public function confirm($orderId)
    {
        $this->orderModel->update($orderId, [
            'status_order' => 'approved'
        ]);

        return redirect()->to('/mitra/orders');
    }

    public function reject($orderId)
    {
        $this->orderModel->update($orderId, [
            'status_order' => 'rejected'
        ]);

        return redirect()->to('/mitra/orders');
    }
}
