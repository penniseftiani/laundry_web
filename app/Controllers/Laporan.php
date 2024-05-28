<?php

namespace App\Controllers;

use App\Models\DetailTransaksiModel;
use App\Models\PaketModel;
use App\Models\UserModel;
use App\Models\MemberModel;
use App\Models\PembayaranModel;
use App\Models\TransaksiModel;

class Laporan extends BaseController
{
    protected $PembayaranModel;
    protected $DetailTransaksiModel;
    protected $TransaksiModel;
    protected $PaketModel;
    protected $UserModel;
    protected $MemberModel;
    private $title = 'Laporan';
    public function __construct()
    {
        $this->PembayaranModel = new PembayaranModel();
        $this->DetailTransaksiModel = new DetailTransaksiModel();
        $this->TransaksiModel = new TransaksiModel();
        $this->PaketModel = new PaketModel();
        $this->UserModel = new UserModel();
        $this->MemberModel = new MemberModel();
    }


    function transaksi()
    {
        $transaksi = $this->TransaksiModel->join('user', 'user.id = transaksi.id_user')->orderBy('id', 'DESC')->findAll();
        $data = [
            'title' => $this->title,
            'transaksi' => $transaksi
        ];
        echo view('laporan/transaksi', $data);
    }

    function pembayaran()
    {
        //$pembayaran = $this->PembayaranModel->findAll();
        $start = $this->request->getVar('start');
        $end = $this->request->getVar('end');
        $data = [
            'title' => $this->title,
            "start" => $start,
            "end" => $end,
            'pembayaran' => $this->PembayaranModel->getAll($start, $end)
        ];
        //dd($start);
        echo view('laporan/pembayaran', $data);
    }
}
