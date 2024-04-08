<?php

namespace App\Controllers;

use Myth\Auth\Models\GroupModel;

class AdminMitra extends BaseController
{
    public function index(): string
    {
        $mitra = new GroupModel();

        $data = [
            'title' => 'Admin | Mitra',
            'mitras' => $mitra->getUsersForGroup(2)
        ];
        return view('admin/mitra/index', $data);
    }
}
