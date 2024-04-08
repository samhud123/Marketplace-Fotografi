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

    public function delete($userId)
    {
        $user = $this->userModel->find($userId);

        if (!$user) {
            session()->setFlashdata('errors', 'No data user');
            return redirect()->to('/admin/mitra');
        }

        // Lakukan soft delete dengan mengatur deleted_at
        $user->deleted_at = date('Y-m-d H:i:s');
        // $user->save();

        session()->setFlashdata('message', 'Successfully disabled user');
        return redirect()->to('/admin/mitra');
    }
}
