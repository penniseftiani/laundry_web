<?php

namespace App\Models;

use CodeIgniter\Model;

class PaketModel extends Model
{
    protected $table = 'paket';
    protected $primaryKey = 'id_paket';
    protected $protectFields    = true;
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $allowedFields    = [
        'nama_paket',
        'harga_paket',
        'id_jenis_paket'

    ];
    function getAll()
    {
        $builder = $this->db->table('paket');
        //$builder->select('karyawan');
        $builder->join('jenis_paket', 'jenis_paket.id_jenis_paket = paket.id_jenis_paket');
        $query = $builder->get();
        return $query->getResultArray();
    }
}
