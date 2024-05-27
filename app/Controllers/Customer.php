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
        $data = [
            'title' => 'Customer | History',
            'orders' => $this->orderModel->getNewOrders(user_id())
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
