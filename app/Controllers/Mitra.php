<?php

namespace App\Controllers;

class Mitra extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Mitra | Dashboard'
        ];
        return view('mitra/index', $data);
    }

    public function profile()
    {
        $data = [
            'title' => 'Mitra | Profile'
        ];
        return view('mitra/profile', $data);
    }
}
