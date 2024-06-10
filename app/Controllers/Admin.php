<?php

namespace App\Controllers;

use Myth\Auth\Models\UserModel;

class Admin extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Admin | Dashboard'
        ];
        return view('admin/index', $data);
    }

    public function profile()
    {
        $data = [
            'title' => 'Admin | Profile'
        ];
        return view('admin/profile', $data);
    }

    public function editProfile()
    {
        $data = [
            'title' => 'Admin | Profile'
        ];
        return view('admin/edit-profile', $data);
    }

    public function saveProfile()
    {
        $user = new UserModel();

        $profile = $user->where('id', user_id())->first();

        if ($profile->username == $this->request->getPost('username')) {
            $rule_username = 'required';
        } else {
            $rule_username = 'required|is_unique[users.username, id,' . user_id() . ']';
        }

        if ($profile->email == $this->request->getPost('email')) {
            $rule_email = 'required';
        } else {
            $rule_email = 'required|valid_email|is_unique[users.email,id,' . user_id() . ']';
        }

        $validation = [
            'username'  => $rule_username,
            'email'     => $rule_email,
            'picture'   => 'max_size[picture,1024]|is_image[picture]|mime_in[picture,image/jpg,image/jpeg,image/png]'
        ];

        if (!$this->validate($validation)) {
            return redirect()->to('/admin/profile/edit')->withInput()->with('errors', $this->validator->getErrors());
        } else {
            // get picture
            $picture = $this->request->getFile('picture');
            // validasi upload
            if ($picture->getError() == 4) {
                $namePicture = $this->request->getPost('fotoLama');
            } else {
                // generate nama sampul random
                $namePicture = $picture->getRandomName();
                // move file to folder img
                $picture->move('img/admin/', $namePicture);
            }

            $user->update(user_id(), [
                'nama'      => $this->request->getPost('nama'),
                'username'  => $this->request->getPost('username'),
                'email'     => $this->request->getPost('email'),
                'foto'      => $namePicture,
            ]);

            //flash message
            session()->setFlashdata('message', 'Successfully update profile');
            return redirect()->to('/admin/profile');
        }
    }
}
