<?php

namespace App\Controllers;

use App\Models\DetailTransaksiModel;
use App\Models\PaketModel;
use App\Models\UserModel;
use App\Models\MemberModel;
use App\Models\PembayaranModel;
use App\Models\TransaksiModel;

class Pembayaran extends BaseController
{
    protected $PembayaranModel;
    protected $DetailTransaksiModel;
    protected $TransaksiModel;
    protected $PaketModel;
    protected $UserModel;
    protected $MemberModel;
    private $title = 'Master Pembayaran';
    public function __construct()
    {
        $this->PembayaranModel = new PembayaranModel();
        $this->DetailTransaksiModel = new DetailTransaksiModel();
        $this->TransaksiModel = new TransaksiModel();
        $this->PaketModel = new PaketModel();
        $this->UserModel = new UserModel();
        $this->MemberModel = new MemberModel();
    }
    function ajax_transaksi()
    {
        $id_transaksi = $this->request->getVar('id_transaksi');
        $result = $this->TransaksiModel->find($id_transaksi);
        echo json_encode($result);
    }
    public function index()
    {
        //$pembayaran = $this->PembayaranModel->findAll();
        $data = [
            'title' => $this->title,
            'pembayaran' => $this->PembayaranModel->getAll()
        ];
        echo view('pembayaran/index', $data);
    }
    public function new()
    {
        $data = [
            'title' => 'Pembayaran',
            'pembayaran' => $this->PembayaranModel->findAll(),
            'transaksi' => $this->TransaksiModel->findAll()
        ];
        //dd($data);
        echo view('pembayaran/new', $data);
    }
    public function create()
    {
        $data = [
            'total' => $this->request->getPost('total'),
            'uang_yang_dibayar' => $this->request->getPost('uang_yang_dibayar'),
            'kode_invoice' => $this->request->getPost('kode_invoice'),
            'kembalian' => $kembalian
        ];
        return redirect()->to('pembayaran');
    }
    public function detail($id_pembayaran = false)
    {
        $result = $this->PembayaranModel->find($id_pembayaran);

        if (!$result) {
            return redirect()->to('Paket');
        }
        $data = [
            'pembayaran' => $result
        ];
        //dd($id_transaksi);

        echo view('pembayaran/detail', $data);
    }
}
