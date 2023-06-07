<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use Myth\Auth\Models\GroupModel;
use Myth\Auth\Models\UserModel;


class Profile extends BaseController
{
    protected $profileModel;
    protected $userModel;

    public function __construct()
    {
        // $this->profileModel = new profileModel();
        $this->userModel = new UserModel();
    }

    public function index()
    {

        // Mendapatkan ID pengguna yang sedang login
        $userId = user()->id;

        // Membuat instance dari model Group
        $groupModel = new GroupModel();

        // Mendapatkan daftar grup untuk pengguna yang sedang login
        $userGroups = $groupModel->getGroupsForUser($userId);


        $data = [
            'judul' => 'My Profile',
            'userGroups' => $userGroups,
        ];
        return view("admin/profile/index", $data);
    }

    public function save(){
        $this->userModel->save([
            'fullname' => $this->request->getVar('fullname'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'alamat' => $this->request->getVar('alamat'),
            'no_wa' => $this->request->getVar('no_wa'),

        ]);
        session()->setFlashdata('pesan', 'Data berhasil diUbah');

        return redirect()->to('/profile');
        // var_dump($data);
    }
}
