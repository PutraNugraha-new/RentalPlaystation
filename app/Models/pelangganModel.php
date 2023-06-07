<?php

namespace App\Models;

use CodeIgniter\Model;

class pelangganModel extends Model
{
    protected $table = 'pelanggan';
    protected $primaryKey = 'id_pelanggan';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_pelanggan', 'tgl_lahir', 'no_telp', 'alamat', 'no_identitas'];

    public function getPelanggan($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id_pelanggan' => $id])->first();
    }

    public function jumlahPelanggan()
    {
        return $this->countAllResults();
    }

}
