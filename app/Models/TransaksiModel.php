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
        'telepon'
    ];
    function getAll($type = 'paket')
    {
        $builder = $this->db->table('transaksi');
        switch ($type) {
            case 'paket':
                $builder->join('paket', 'paket.id_paket = transaksi.id_paket');
                break;
            case 'user':
                $builder->join('user', 'user.id = transaksi.id');
                break;
            case 'member':
                $builder->join('member', 'member.id_member = transaksi.id_member');
                break;
            default:
                // Tipe pengambilan data tidak valid
                return false;
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
