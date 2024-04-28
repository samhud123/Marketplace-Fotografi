<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'FOTOGRAFI'
        ];
        return view('index', $data);
    }
}
