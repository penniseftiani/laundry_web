<?php

namespace App\Controllers;

use App\Models\PembayaranModel;
use App\Models\TransaksiModel;

class Home extends BaseController
{
    protected $PembayaranModel;
    protected $DetailTransaksiModel;
    protected $TransaksiModel;
    public function __construct()
    {
        $this->PembayaranModel = new PembayaranModel();
        $this->TransaksiModel = new TransaksiModel();
    }
    public function index()

    {
        return view('homepage');
    }

    public function cek_invoice()
    {
        $kode_invoice = $this->request->getVar('kode_invoice');
        $data = [
            'data' => $this->TransaksiModel->where('kode_invoice', $kode_invoice)->first()
        ];
        return view('cek_invoice', $data);
    }
}
