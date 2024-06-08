<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table = 'transaksi';
    protected $primaryKey = 'id_transaksi';
    protected $protectFields    = true;
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $allowedFields    = [
        'kode_invoice',
        'tgl_transaksi',
        'id_paket',
        'tanggal_selesai',
        'status_cucian',
        'status_bayar',
        'id_user',
        'id_member',
        'nama',
        'alamat',
        'total',
        'telepon'
    ];
    function getAll($start = null, $end = null)
    {
        $builder = $this->db->table('transaksi');
        if ($start != null) {
            $builder->where('convert(tgl_transaksi, date) >=', $start);
            $builder->where('convert(tgl_transaksi, date) <=', $end);
        }
        $query = $builder->get();
        return $query->getResultArray();
    }

    // function getAll()
    // {
    //     $builder = $this->db->table('transaksi');
    //     $builder->join('paket', 'paket.id_paket = transaksi.id_paket');
    //     $query = $builder->get();
    //     return $query->getResultArray();
    // }
    // function getAll()
    // {
    //     $builder = $this->db->table('transaksi');
    //     $builder->join('user', 'user.id = transaksi.id');
    //     $query = $builder->get();
    //     return $query->getResultArray();
    // }
    // function getAll()
    // {
    //     $builder = $this->db->table('transaksi');
    //     $builder->join('member', 'member.id_member = transaksi.id_member');
    //     $query = $builder->get();
    //     return $query->getResultArray();
    // }
}
