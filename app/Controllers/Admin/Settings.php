<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use Myth\Auth\Models\UserModel;

class Settings extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        // $this->profileModel = new profileModel();
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $data = [
            'judul' => 'Settings',
        ];
        return view('admin/settings/index', $data);
    }

    public function ubah(){
        $this->userModel->save([
            'id' => $this->request->getVar('id'),
            'fullname' => $this->request->getVar('fullname'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'alamat' => $this->request->getVar('alamat'),
            'no_wa' => $this->request->getVar('no_wa'),

        ]);
        session()->setFlashdata('pesan', 'Data berhasil diUbah');

        return redirect()->to('/profile');
    }
}
