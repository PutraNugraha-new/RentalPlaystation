<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\pelangganModel;
use App\Models\transaksiModel;
use Faker\Factory;


class Pelanggan extends BaseController
{

    protected $pelangganModel;
    protected $transaksiModel;

    public function __construct()
    {
        $this->pelangganModel = new pelangganModel();
        $this->transaksiModel = new transaksiModel();
    }

    public function index()
    {   
        // // Menentukan jumlah data dummy yang ingin dimasukkan
        // $jumlahDataDummy = 100;

        // // Menginisialisasi objek Faker
        // $faker = \Faker\Factory::create();

        // // Melakukan iterasi sebanyak jumlah data dummy yang ditentukan
        // for ($i = 0; $i < $jumlahDataDummy; $i++) {
        //     // Membuat data dummy menggunakan Faker
        //     $dataDummy = [
        //         'nama_pelanggan' => $faker->name,
        //         'tgl_lahir' => $faker->date,
        //         'no_telp' => $faker->phoneNumber,
        //         'alamat' => $faker->address,
        //         'no_identitas' => $faker->randomNumber(9),
        //     ];

        //     // Memasukkan data dummy ke dalam database
        //     $this->pelangganModel->insert($dataDummy);
        // }


        $data = [
            'judul' => 'Pelanggan',
            'pelanggan' => $this->pelangganModel->getPelanggan(),
        ];
        return view('admin/pelanggan/index', $data);
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
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('/pelanggan');
    }



    public function edit()
    {
        echo json_encode($this->pelangganModel->getPelanggan($_POST['id']));
    }
    public function ubah(){
        $this->pelangganModel->save([
            'id_pelanggan' => $this->request->getVar('id_pelanggan'),
            'nama_pelanggan' => $this->request->getVar('nama_pelanggan'),
            'tgl_lahir' => $this->request->getVar('tgl_lahir'),
            'no_telp' => $this->request->getVar('no_telp'),
            'alamat' => $this->request->getVar('alamat'),
            'no_identitas' => $this->request->getVar('no_identitas'),
            'jenis_identitas' => $this->request->getVar('jenis_identitas'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('/pelanggan');
    }

    public function delete($id)
    {   
        $cek = $this->transaksiModel->cariPelanggan($id);
        if ($cek > 0){
            session()->setFlashdata('pesan_merah', 'Data Pelanggan sedang dipakai');
            return redirect()->to('/pelanggan');
        }
        $this->pelangganModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/pelanggan');
    }
}
