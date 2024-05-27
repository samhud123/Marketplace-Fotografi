<?php

namespace App\Controllers;

use App\Models\GalleryModel;
use App\Models\ServiceModel;

class Search extends BaseController
{
    protected $serviceModel, $galleryModel;

    public function __construct()
    {
        $this->serviceModel = new ServiceModel();
        $this->galleryModel = new GalleryModel();
    }

    public function index(): string
    {
        $search = $this->request->getGet('search');

        if ($search) {
            $result = $this->serviceModel->search($search);
        } else {
            $result = $this->serviceModel->getAllService();
        }
        $data = [
            'title' => 'Search',
            'services' => $result
        ];
        return view('search', $data);
    }

    public function detail($serviceId)
    {
        $service = $this->serviceModel->getServiceById($serviceId);
        $mitraId = $service[0]['id'];
        $data = [
            'service' => $service,
            'galleries' => $this->galleryModel->where('user_id', $mitraId)->findAll()
        ];
        return view('detail', $data);
    }
}
