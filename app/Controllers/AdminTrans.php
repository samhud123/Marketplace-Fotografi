<?php

namespace App\Controllers;

use App\Models\OrderModel;

class AdminTrans extends BaseController
{
    protected $orderModel;

    public function __construct()
    {
        $this->orderModel = new OrderModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Admin | Transaction',
            'orders' => $this->orderModel->getAllOrders()
        ];

        return view('admin/transaction/index', $data);
    }
}
