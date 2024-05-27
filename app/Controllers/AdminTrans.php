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
            'mitras' => $this->orderModel->adminTransMitra(),
            'buyers' => $this->orderModel->adminTransBuyer()
        ];

        return view('admin/transaction/index', $data);
    }
}
