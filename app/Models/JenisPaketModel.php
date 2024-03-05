<?php

namespace App\Models;

use CodeIgniter\Model;

class JenisPaketModel extends Model
{
    protected $table = 'jenis_paket';
    protected $primaryKey = 'id_jenis_paket';
    protected $protectFields    = true;
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $allowedFields    = [
        'nama_jenis_paket',
    ];
}
