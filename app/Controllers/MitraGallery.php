<?php

namespace App\Controllers;

use App\Models\GalleryModel;

class MitraGallery extends BaseController
{
    protected $galleryModel;

    public function __construct()
    {
        $this->galleryModel = new GalleryModel();
    }

    public function index(): string
    {
        $data = [
            'title' => 'Mitra | Gallery',
            'photos' => $this->galleryModel->where('user_id', user_id())->findAll()
        ];
        return view('mitra/gallery/index', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Mitra | Gallery'
        ];
        return view('mitra/gallery/add', $data);
    }

    public function save()
    {
        $validation = [
            'title' => 'required|max_length[100]',
            'photo' => 'max_size[photo,1024]|is_image[photo]|mime_in[photo,image/jpg,image/jpeg,image/png]'
        ];

        if (!$this->validate($validation)) {
            return redirect()->to('/mitra/gallery/add')->withInput()->with('errors', $this->validator->getErrors());
        } else {
            // get picture
            $photo = $this->request->getFile('photo');
            // validasi upload
            if ($photo->getError() == 4) {
                return redirect()->to('/mitra/gallery/add')->withInput()->with('errors', 'What you entered is not an image');
            } else {
                // generate nama sampul random
                $namePhoto = $photo->getRandomName();
                // move file to folder img
                $photo->move('img/gallery', $namePhoto);
            }

            //insert data
            $this->galleryModel->insert([
                'user_id'       => user_id(),
                'title'         => $this->request->getPost('title'),
                'photo'         => $namePhoto
            ]);

            //flash message
            session()->setFlashdata('message', 'Successfully added gallery');
            return redirect()->to('/mitra/gallery');
        }
    }

    public function edit($galleryId)
    {
        $data = [
            'title' => 'Mitra | Gallery',
            'photo' => $this->galleryModel->where('gallery_id', $galleryId)->where('user_id', user_id())->first()
        ];
        return view('mitra/gallery/edit', $data);
    }

    public function update($galleryId)
    {
        $validation = [
            'title' => 'required|max_length[100]',
            'photo' => 'max_size[photo,1024]|is_image[photo]|mime_in[photo,image/jpg,image/jpeg,image/png]'
        ];

        if (!$this->validate($validation)) {
            return redirect()->to('/mitra/gallery/edit/' . $galleryId)->withInput()->with('errors', $this->validator->getErrors());
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
                $newPhoto->move('img/gallery', $photo);

                // delete old foto
                unlink('img/gallery/' . $oldPhoto);
            }

            $this->galleryModel->update($galleryId, [
                'title'  => $this->request->getPost('title'),
                'photo'         => $photo
            ]);

            //flash message
            session()->setFlashdata('message', 'Successfully update gallery');
            return redirect()->to('/mitra/gallery');
        }
    }

    public function delete($galleryId)
    {
        $gallery = $this->galleryModel->find($galleryId);

        if ($gallery) {
            //delete foto
            unlink('img/gallery/' . $gallery['photo']);
            // delete data
            $this->galleryModel->delete($galleryId);
            //flash message
            session()->setFlashdata('message', 'Gallery Deleted Successfully!');
            return redirect()->to('/mitra/gallery');
        } else {
            session()->setFlashdata('errors', 'data not found');
            return redirect()->to('/mitra/gallery');
        }
    }
}
