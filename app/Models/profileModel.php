<?php

namespace App\Models;

use CodeIgniter\Model;

class profileModel extends Model
{
    protected $table          = 'users';
    protected $primaryKey     = 'id';
    protected $returnType     = User::class;
    protected $useSoftDeletes = true;
    protected $allowedFields  = [
        'email', 'fullname', 'user_image', 'jenis_kelamin', 'alamat', 'no_wa', 'username', 'password_hash', 'reset_hash', 'reset_at', 'reset_expires', 'activate_hash',
        'status', 'status_message', 'active', 'force_pass_reset', 'permissions', 'deleted_at',
    ];
    protected $useTimestamps   = true;
    protected $validationRules = [
        'email'         => 'required|valid_email|is_unique[users.email,id,{id}]',
        'username'      => 'required|alpha_numeric_punct|min_length[3]|max_length[30]|is_unique[users.username,id,{id}]',
        'password_hash' => 'required',
    ];
    protected $validationMessages = [];
    protected $skipValidation     = false;
    protected $afterInsert        = ['addToGroup'];


}
