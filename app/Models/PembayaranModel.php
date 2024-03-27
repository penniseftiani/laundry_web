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
    ];
}
