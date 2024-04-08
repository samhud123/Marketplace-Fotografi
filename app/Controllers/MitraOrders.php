<?php

namespace App\Controllers;

class MitraOrders extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Mitra | Orders'
        ];
        return view('mitra/orders/index', $data);
    }
}