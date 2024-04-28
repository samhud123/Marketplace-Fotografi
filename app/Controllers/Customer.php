<?php

namespace App\Controllers;

use App\Models\OrderModel;

class Customer extends BaseController
{
    protected $orderModel;

    public function __construct()
    {
        $this->orderModel = new OrderModel();
    }

    public function index(): string
    {
        $data = [
            'title' => 'Customer | Profile'
        ];
        return view('customer/index', $data);
    }

    public function order()
    {
        $data = [
            'title' => 'Customer | Order',
            'orders' => $this->orderModel->getNewOrders(user_id())
        ];
        return view('customer/orders', $data);
    }

    public function finish($orderId)
    {
        $this->orderModel->update($orderId, [
            'status_order' => 'finished'
        ]);

        return redirect()->to('/customer/order');
    }
}
