<?php

namespace App\Controllers;

use Myth\Auth\Models\GroupModel;
use Myth\Auth\Models\UserModel;

class AdminMitra extends BaseController
{
    protected $userModel, $groupModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->groupModel = new GroupModel();
    }

    public function index(): string
    {
        $data = [
            'title' => 'Admin | Mitra',
            'mitras' => $this->groupModel->getUsersForGroup(2)
        ];
        return view('admin/mitra/index', $data);
    }

    public function disabled($id)
    {
        $this->userModel->update($id, [
            'active' => 0
        ]);

        return redirect()->to('/admin/mitra');
    }

    public function enabled($id)
    {
        $this->userModel->update($id, [
            'active' => 1
        ]);

        return redirect()->to('/admin/mitra');
    }
}
