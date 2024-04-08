<?php

namespace App\Controllers;

use App\Models\ServiceModel;

class MitraService extends BaseController
{
    protected $serviceModel;

    public function __construct()
    {
        $this->serviceModel = new ServiceModel();
    }

    public function index(): string
    {
        $data = [
            'title' => 'Mitra | Service',
            'services' => $this->serviceModel->where('user_id', user_id())->findAll()
        ];
        return view('mitra/service/index', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Mitra | Service'
        ];
        return view('mitra/service/add', $data);
    }

    public function save()
    {
        $validation = [
            'service' => 'required|max_length[100]',
            'price'   => 'required|numeric',
            'description' => 'required',
            'photo' => 'max_size[photo,1024]|is_image[photo]|mime_in[photo,image/jpg,image/jpeg,image/png]'
        ];

        if (!$this->validate($validation)) {
            return redirect()->to('/mitra/service/add')->withInput()->with('errors', $this->validator->getErrors());
        } else {
            // get picture
            $photo = $this->request->getFile('photo');
            // validasi upload
            if ($photo->getError() == 4) {
                return redirect()->to('/mitra/service/add')->withInput()->with('errors', 'What you entered is not an image');
            } else {
                // generate nama sampul random
                $namePhoto = $photo->getRandomName();
                // move file to folder img
                $photo->move('img/mitra', $namePhoto);
            }

            //insert data
            $this->serviceModel->insert([
                'user_id'       => user_id(),
                'name_service'  => $this->request->getPost('service'),
                'description'   => $this->request->getPost('description'),
                'price'         => $this->request->getPost('price'),
                'photo'         => $namePhoto
            ]);

            //flash message
            session()->setFlashdata('message', 'Successfully added service');
            return redirect()->to('/mitra/service');
        }
    }

    public function edit($serviceId)
    {
        $data = [
            'title' => 'Mitra | Service',
            'service' => $this->serviceModel->where('service_id', $serviceId)->where('user_id', user_id())->first()
        ];
        return view('mitra/service/edit', $data);
    }

    public function update($serviceId)
    {
        $validation = [
            'service' => 'required|max_length[100]',
            'price'   => 'required|numeric',
            'description' => 'required',
            'photo' => 'max_size[photo,1024]|is_image[photo]|mime_in[photo,image/jpg,image/jpeg,image/png]'
        ];

        if (!$this->validate($validation)) {
            return redirect()->to('/mitra/service/edit/' . $serviceId)->withInput()->with('errors', $this->validator->getErrors());
        } else {
            $newPhoto = $this->request->getFile('photo');
            $oldPhoto = $this->request->getVar('oldPhoto');

            // check foto
            if ($newPhoto->getError() == 4) {
                $photo = $oldPhoto;
            } else {
                // generate random name
                $photo = $newPhoto->getRandomName();
                // move the foto
                $newPhoto->move('img/mitra', $photo);

                // delete old foto
                unlink('img/mitra/' . $oldPhoto);
            }

            $this->serviceModel->update($serviceId, [
                'name_service'  => $this->request->getPost('service'),
                'description'   => $this->request->getPost('description'),
                'price'         => $this->request->getPost('price'),
                'photo'         => $photo
            ]);

            //flash message
            session()->setFlashdata('message', 'Successfully update service');
            return redirect()->to('/mitra/service');
        }
    }

    public function delete($serviceId)
    {
        $service = $this->serviceModel->find($serviceId);

        if ($service) {
            //delete foto
            unlink('img/mitra/' . $service['photo']);
            // delete data
            $this->serviceModel->delete($serviceId);
            //flash message
            session()->setFlashdata('message', 'Service Deleted Successfully!');
            return redirect()->to('/mitra/service');
        } else {
            session()->setFlashdata('errors', 'data not found');
            return redirect()->to('/mitra/service');
        }
    }
}
