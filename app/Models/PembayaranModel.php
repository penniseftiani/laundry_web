<?php

namespace App\Models;

use CodeIgniter\Model;

class PembayaranModel extends Model
{
    protected $table = 'pembayaran';
    protected $primaryKey = 'id_pembayaran';
    protected $protectFields    = true;
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $allowedFields    = [
        'id_transaksi',
        'total_harga',
        'uang_yang_dibayar',
        'kembalian',
        'tanggal_bayar',
    ];
    function getAll($start = null, $end = null)
    {
        $builder = $this->db->table('pembayaran');
        //$builder->select('karyawan');
        $builder->join('transaksi', 'transaksi.id_transaksi = pembayaran.id_transaksi');
        if ($start != null) {
            $builder->where('convert(tanggal_bayar, date) >=', $start);
            $builder->where('convert(tanggal_bayar, date) <=', $end);
        }
        $query = $builder->get();
        return $query->getResultArray();
    }
}
