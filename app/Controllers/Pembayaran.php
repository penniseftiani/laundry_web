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
            'transaksi' => $this->TransaksiModel->where('status_bayar', 'belum lunas')->findAll()
        ];
        //dd($data);
        echo view('pembayaran/new', $data);
    }
    public function create()
    {
        $id_transaksi = $this->request->getPost('id_transaksi');
        $total  = $this->request->getPost('total');
        $uang_yang_dibayar  = $this->request->getPost('uang_yang_dibayar');
        $kembalian = $uang_yang_dibayar - $total;
        if ($kembalian < 0) {
            return redirect()->back();
        }
        $data = [
            'total_harga' => $total,
            'uang_yang_dibayar' => $uang_yang_dibayar,
            'id_transaksi' => $this->request->getPost('id_transaksi'),
            'status_cucian' => $this->request->getPost('status_cucian'),
            'kembalian' => $kembalian,
            'tanggal_bayar' => date('Y-m-d H:i:s')
        ];
        $this->PembayaranModel->where('id_transaksi', $id_transaksi)->update(null, $data);

        $data_transaksi = [
            'status_bayar' => 'lunas',
        ];

        $this->TransaksiModel->update($id_transaksi, $data_transaksi);


        //dd($data);
        return redirect()->to('pembayaran');
    }
    public function detail($id_transaksi = false)
    {
        $result = $this->TransaksiModel->find($id_transaksi);

        if (!$result) {
            return redirect()->to('Paket');
        }
        $data = [
            'paket' => $this->PaketModel->join('jenis_paket', 'jenis_paket.id_jenis_paket = paket.id_jenis_paket')->findAll(),
            'user' => $this->UserModel->findAll(),
            'member' => $this->MemberModel->findAll(),
            'detail_transaksi' => $this->DetailTransaksiModel->join('paket', 'paket.id_paket = detail_transaksi.id_paket')->join('jenis_paket', 'jenis_paket.id_jenis_paket = paket.id_jenis_paket')->where('id_transaksi', $id_transaksi)->findAll(),
            'transaksi' => $result,
            'pembayaran' => $this->PembayaranModel->where('id_transaksi', $id_transaksi)->first()
        ];
        // dd($data);

        echo view('pembayaran/detail', $data);
    }
}
