<?php

namespace App\Controllers;

class Customer extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Customer | Profile'
        ];
        return view('customer/index', $data);
    }
}
