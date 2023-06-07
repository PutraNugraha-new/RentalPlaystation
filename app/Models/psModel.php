<?php

namespace App\Models;

use CodeIgniter\Model;

class psModel extends Model
{
    protected $table = 'playstation';
    protected $primaryKey = 'id_ps';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_ps', 'tipe_ps', 'harga_sewa', 'tgl_pembelian', 'jumlah_unit'];

    public function getPs($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id_ps' => $id])->first();
    }

    public function jumlahPs()
    {
        return $this->countAllResults();
    }

}
