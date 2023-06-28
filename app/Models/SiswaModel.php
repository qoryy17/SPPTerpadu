<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table            = 't_siswa';
    protected $primaryKey       = 'NISN';
    protected $useAutoIncrement = false;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['NISN', 'Nama', 'TempatLahir', 'TanggalLahir', 'JenisKelamin', 'Agama', 'Alamat', 'IDKelas', 'IDJurusan', 'IDTahunAjaran', 'IDAkunAdmin', 'created_at', 'updated_at'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
}
