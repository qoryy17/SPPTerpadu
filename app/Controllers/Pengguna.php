<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AutentifikasiModel;
use App\Models\LogsModel;

class Pengguna extends BaseController
{
    // Deklarasi variabel library, helper dan lain lain
    protected $validation;
    protected $session;
    protected $MAuthAdmin;
    protected $MLogs;

    public function __construct()
    {
        $this->validation = \Config\Services::validation();
        $this->session = \Config\Services::session();
        $this->MAuthAdmin = new AutentifikasiModel();
        $this->MLogs = new LogsModel();
    }

    public function akun_siswa()
    {
        return view('admin/V_Data_akun_siswa', ['session' => \Config\Services::session()]);
    }

    public function akun_administrator()
    {
        $data = array(
            'session' => \Config\Services::session(),
            'administrator' => $this->MAuthAdmin->orderBy('created_at', 'DESC')->findAll(),
        );
        return view('admin/V_Data_akun_administrator', $data);
    }

    public function form_akun_administrator($parameter = null, $idadmin = null)
    {
        if (decrypt_url($parameter) == 'Tambah') {
            $status_form = 'Tambah';
            $dt_akun_administrator = array(
                'IDAkunAdmin' => rand(),
                'NamaLengkap' => '',
                'NamaPengguna' => '',
                'KataSandi' => '',
                'Status' => '',
                'Aktivasi' => '',
                'Foto' => '',
            );
        } elseif (decrypt_url($parameter) == 'Perbarui') {
            $status_form = 'Perbarui';
            $cari_akun_admin = $this->MAuthAdmin->find(decrypt_url($idadmin));
            $dt_akun_administrator = array(
                'IDAkunAdmin' => $cari_akun_admin['IDAkunAdmin'],
                'NamaLengkap' => $cari_akun_admin['NamaLengkap'],
                'NamaPengguna' => $cari_akun_admin['NamaPengguna'],
                'KataSandi' => '',
                'Status' => $cari_akun_admin['Status'],
                'Aktivasi' => $cari_akun_admin['Aktivasi'],
                'Foto' => $cari_akun_admin['Foto']
            );
        } else {
            $this->session->setFlashdata('pesan', '<script>window.onload = function() {
                    swal({
                        title: "Data Akun Administrator",
                        text: "Parameter Tidak Valid !",
                        type: "error",
                        confirmButtonColor: "#57a94f"
                    });
                }</script>');
            // Arahkan halaman website jika parameter tidak valid
            return redirect()->to(site_url('siswa/data_kelas'));
        }

        $data = array(
            'session' => \Config\Services::session(),
            'status_form' => $status_form,
            'akun_admin' => $dt_akun_administrator
        );
        return view('/admin/V_Form_akun_administrator', $data);
    }
}
