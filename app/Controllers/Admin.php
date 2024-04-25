<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Admin | Dashboard'
        ];
        return view('admin/index', $data);
    }

    public function profile()
    {
        $data = [
            'title' => 'Admin | Profile'
        ];
        return view('admin/profile', $data);
    }
}
