<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{

    // Deklarasi variabel untuk validation
    protected $validation;

    public function __construct()
    {
        $this->validation = \Config\Services::validation();
    }

    public function admin()
    {
        $data = array('validation' => \Config\Services::validation());
        return view('admin/V_Login', $data);
    }

    public function siswa()
    {
        // return view('siswa/V_SignIn');
    }
}
