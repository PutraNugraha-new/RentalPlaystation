<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\psModel;
use App\Models\transaksiModel;

class Playstation extends BaseController
{
    protected $psModel;
    protected $transaksiModel;

    public function __construct()
    {
        $this->psModel = new psModel();
        $this->transaksiModel = new transaksiModel();
    }

    public function index()
    {
        $data = [
            'judul' => 'Playstation',
            'ps' => $this->psModel->getPs(),
        ];

        return view('admin/playstation/index', $data);
    }

    public function save(){
        $this->psModel->save([
            'nama_ps' => $this->request->getVar('nama_ps'),
            'tipe_ps' => $this->request->getVar('tipe_ps'),
            'harga_sewa' => $this->request->getVar('harga_sewa'),
            'tgl_pembelian' => $this->request->getVar('tgl_pembelian'),
            'jumlah_unit' => $this->request->getVar('jumlah_unit')
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('/playstation');
    }

    public function edit()
    {
        echo json_encode($this->psModel->getPs($_POST['id']));
    }
    
    public function ubah(){
        $this->psModel->save([
            'id_ps' => $this->request->getVar('id_ps'),
            'nama_ps' => $this->request->getVar('nama_ps'),
            'tipe_ps' => $this->request->getVar('tipe_ps'),
            'harga_sewa' => $this->request->getVar('harga_sewa'),
            'tgl_pembelian' => $this->request->getVar('tgl_pembelian'),
            'jumlah_unit' => $this->request->getVar('jumlah_unit')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('/playstation');
    }

    public function delete($id)
    {
        $cek = $this->transaksiModel->cariPs($id);
        if ($cek > 0){
            session()->setFlashdata('pesan_merah', 'Data Playstation sedang dipakai');
            return redirect()->to('/playstation');
        }
        $this->psModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/playstation');
    }

}
