<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    // Deklarasi variabel library, helper dan lain lain
    protected $validation;
    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();
    }


    public function index()
    {
        $data = array('session' => \Config\Services::session(),);
        return view('admin/V_beranda', $data);
    }
}
