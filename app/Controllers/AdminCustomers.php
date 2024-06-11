<?php

namespace App\Controllers;

use App\Models\OrderModel;
use Myth\Auth\Models\UserModel;
use Myth\Auth\Models\GroupModel;

class AdminCustomers extends BaseController
{
    protected $userModel, $groupModel, $orderModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->groupModel = new GroupModel();
        $this->orderModel = new OrderModel();
    }

    public function index(): string
    {
        $data = [
            'title' => 'Admin | Customers',
            'customers' => $this->groupModel->getUsersForGroup(3)
        ];
        return view('admin/customer/index', $data);
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Admin | Customers',
            'customer' => $this->userModel->where('id', $id)->first(),
            'orders' => $this->orderModel->getOrdersByBuyer($id)
        ];
        return view('admin/customer/detail', $data);
    }

    public function disabled($id)
    {
        $this->userModel->update($id, [
            'active' => 0
        ]);

        return redirect()->to('/admin/customers');
    }

    public function enabled($id)
    {
        $this->userModel->update($id, [
            'active' => 1
        ]);

        return redirect()->to('/admin/customers');
    }
}
