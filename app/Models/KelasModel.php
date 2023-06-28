<?php

namespace App\Models;

use CodeIgniter\Model;

class KelasModel extends Model
{
    protected $table            = 't_kelas';
    protected $primaryKey       = 'IDKelas';
    protected $useAutoIncrement = false;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['IDKelas', 'Kelas', 'IDAkunAdmin', 'created_at', 'updated_at'];

    // Dates    
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
}
