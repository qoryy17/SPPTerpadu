<?php

namespace App\Models;

use CodeIgniter\Model;

class AutentifikasiModel extends Model
{
    protected $table            = 't_akun_admin';
    protected $primaryKey       = 'IDAkunAdmin';
    protected $useAutoIncrement = false;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['IDAkunAdmin', 'NamaLengkap', 'NamaPengguna', 'KataSandi', 'Status', 'Aktivasi', 'Foto', 'created_at', 'updated_at'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
}
