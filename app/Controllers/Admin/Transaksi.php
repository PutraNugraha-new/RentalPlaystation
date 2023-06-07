<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\transaksiModel;
use App\Models\pelangganModel;
use App\Models\psModel;

class Transaksi extends BaseController
{
    protected $transaksiModel;
    protected $pelangganModel;
    protected $psModel;
    public function __construct()
    {
        $this->transaksiModel = new transaksiModel();
        $this->pelangganModel = new pelangganModel();
        $this->psModel = new psModel();
    }

    public function index()
    {
        $data = [
            'judul' => 'Transaksi',
            'transaksi' => $this->transaksiModel->getAll(),
            'dataTransaksi' => $this->transaksiModel->getTransaksi(),
            'pelanggan' => $this->pelangganModel->getPelanggan(),
            'ps' => $this->psModel->getPs(),
            'jumlahPs' => $this->psModel->jumlahPs(),
            'jumlahSelesai' => $this->transaksiModel->jumlahSelesai(),
            'jumlahDisewa' => $this->transaksiModel->jumlahDisewa(),
            'jumlahPelanggan' => $this->pelangganModel->jumlahPelanggan(),
        ];
        return view('admin/transaksi/index', $data);
    }

    public function getHargaSewa() {
        $idPs = $this->request->getPost('id_ps');

         // Panggil model atau lakukan query ke database untuk mendapatkan harga sewa berdasarkan id_ps
        $psModel = new psModel();
         $dataHargaSewa = $psModel->getPs($idPs);
         
         // Mengirim data harga sewa dalam format JSON
        return $this->response->setJSON($dataHargaSewa);
    }

    public function save(){
        $this->transaksiModel->save([
            'tgl_peminjaman' => $this->request->getVar('tgl_peminjaman'),
            'id_pelanggan' => $this->request->getVar('id_pelanggan'),
            'id_ps' => $this->request->getVar('id_ps'),
            'harga_sewa' => $this->request->getVar('harga_sewa'),
            'lama_peminjaman' => $this->request->getVar('lama_peminjaman'),
            'tunai' => $this->request->getVar('tunai'),
            'total_harga' => $this->request->getVar('total_harga'),
            'kembalian' => $this->request->getVar('kembalian'),
            'status_peminjaman' => $this->request->getVar('status_peminjaman'),
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('/transaksi');
    }

    public function edit()
    {
        echo json_encode($this->transaksiModel->getTransaksi($_POST['id']));
    }
    public function ubah(){
        $this->transaksiModel->save([
            'no_transaksi' => $this->request->getVar('no_transaksi'),
            'tgl_peminjaman' => $this->request->getVar('tgl_peminjaman'),
            'id_pelanggan' => $this->request->getVar('id_pelanggan'),
            'id_ps' => $this->request->getVar('id_ps'),
            'harga_sewa' => $this->request->getVar('harga_sewa'),
            'lama_peminjaman' => $this->request->getVar('lama_peminjaman'),
            'tunai' => $this->request->getVar('tunai'),
            'total_harga' => $this->request->getVar('total_harga'),
            'kembalian' => $this->request->getVar('kembalian'),
            'status_peminjaman' => $this->request->getVar('status_peminjaman'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('/transaksi');
    }

    public function delete($id)
    {
        $this->transaksiModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/transaksi');
    }

    public function cetak($transactionId)
    {
        $transaction = $this->transaksiModel->getAllStruk($transactionId);

        if ($transaction) {
            // Load view struk transaksi dengan data transaksi
            $data['transaction'] = $transaction;
            // var_dump($data);
            return view('admin/transaksi/cetak', $data);
        } else {
            // Jika transaksi tidak ditemukan, tampilkan pesan error atau redirect ke halaman lain
            return redirect()->back()->with('error', 'Transaksi tidak ditemukan.');
        }
    }
}
