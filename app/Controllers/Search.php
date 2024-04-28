<?php

namespace App\Controllers;

use App\Models\ServiceModel;

class Search extends BaseController
{
    public function index(): string
    {
        $search = $this->request->getGet('search');
        $serviceModel = new ServiceModel();
        if ($search) {
            $result = $serviceModel->search($search);
        } else {
            $result = $serviceModel->getAllService();
        }
        $data = [
            'title' => 'Search',
            'services' => $result
        ];
        return view('search', $data);
    }
}
