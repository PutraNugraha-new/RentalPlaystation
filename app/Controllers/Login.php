<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Login',
        ];
        return view('login/index', $data);
    }
}
