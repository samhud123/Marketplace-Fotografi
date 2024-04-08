<?php

namespace App\Controllers;

use Myth\Auth\Models\UserModel;
use Myth\Auth\Models\GroupModel;

class AdminCustomers extends BaseController
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
            'title' => 'Admin | Customers',
            'customers' => $this->groupModel->getUsersForGroup(3)
        ];
        return view('admin/customer/index', $data);
    }
}
