<?php

namespace App\Controllers;

use App\Models\pelangganModel;

class Home extends BaseController
{
    protected $pelangganModel;

    public function __construct()
    {
        $this->pelangganModel = new pelangganModel();
    }
    public function index()
    {
        $data = [
            'judul' => 'Home'
        ];
        return view('home/index', $data);
    }


    public function save(){
        $this->pelangganModel->save([
            'nama_pelanggan' => $this->request->getVar('nama_pelanggan'),
            'tgl_lahir' => $this->request->getVar('tgl_lahir'),
            'no_telp' => $this->request->getVar('no_telp'),
            'alamat' => $this->request->getVar('alamat'),
            'no_identitas' => $this->request->getVar('no_identitas'),
            'jenis_identitas' => $this->request->getVar('jenis_identitas'),
        ]);
        session()->setFlashdata('pesan', 'Kamu telah Terdaftar');

        return redirect()->to('/');
    }
}