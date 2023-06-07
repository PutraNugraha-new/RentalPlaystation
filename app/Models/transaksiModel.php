<?php

namespace App\Models;

use CodeIgniter\Model;

class transaksiModel extends Model
{
    protected $table = 'transaksi';
    protected $primaryKey = 'no_transaksi';
    protected $useTimestamps = true;
    protected $allowedFields = ['tgl_peminjaman', 'id_pelanggan', 'id_ps', 'harga_sewa', 'lama_peminjaman', 'tunai', 'total_harga', 'kembalian', 'status_peminjaman'];

    public function getTransaksi($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['no_transaksi' => $id])->first();
    }

    public function getAll()
    {
        $builder = $this->db->table("transaksi");
        // $builder->select('*');
        $builder->join('pelanggan', 'pelanggan.id_pelanggan = transaksi.id_pelanggan');
        $builder->join('playstation', 'playstation.id_ps = transaksi.id_ps');
        $sifat = $builder->get()->getResult();
        return $sifat;
    }

    public function getAllStruk($primaryKey)
{
    $builder = $this->db->table("transaksi");
    // $builder->select('*');
    $builder->join('pelanggan', 'pelanggan.id_pelanggan = transaksi.id_pelanggan');
    $builder->join('playstation', 'playstation.id_ps = transaksi.id_ps');
    $builder->where('transaksi.no_transaksi', $primaryKey); // Ganti 'primary_key_field' dengan nama field primary key pada tabel 'transaksi'
    $sifat = $builder->get()->getResult();
    return $sifat;
}


    public function jumlahSelesai()
    {
        return $this->where(['status_peminjaman' => 'Selesai'])->countAllResults();
    }
    public function jumlahDisewa()
    {
        return $this->where(['status_peminjaman' => 'Disewa'])->countAllResults();
    }

    public function cariPelanggan($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id_pelanggan' => $id])->countAllResults();
    }
    public function cariPs($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id_ps' => $id])->countAllResults();
    }
}
