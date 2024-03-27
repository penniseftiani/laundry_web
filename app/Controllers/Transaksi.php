<?php

namespace App\Controllers;

use App\Models\PaketModel;
use App\Models\UserModel;
use App\Models\MemberModel;
use App\Models\TransaksiModel;

class Transaksi extends BaseController
{
    protected $TransaksiModel;
    protected $PaketModel;
    protected $UserModel;
    protected $MemberModel;
    private $title = 'Master Transaksi';
    public function __construct()
    {
        $this->TransaksiModel = new TransaksiModel();
        $this->PaketModel = new PaketModel();
        $this->UserModel = new UserModel();
        $this->MemberModel = new MemberModel();

    }
    public function index()
    {
        $transaksi = $this->TransaksiModel->findAll();
        $data = [
            'title' => $this->title,
            'transaksi' => $transaksi
        ];
        echo view('transaksi/index', $data);
    }
      public function new()
    { 
            $data = [
                'title' => 'Tambah Transaksi',
                'transaksi' => $this->TransaksiModel->findAll(),
                'paket' => $this->PaketModel->findAll(),
                'user' => $this->UserModel->findAll(),
                'member' => $this->MemberModel->findAll(),
            ];
            // dd($data);
            echo view('transaksi/new', $data);
        
    }
    public function create()
    {
        $kode_invoice = $this->request->getPost('kode_invoice');
        if (empty($kode_invoice)) {
        // Penanganan kesalahan jika kode_invoice kosong
        // Misalnya, tampilkan pesan kesalahan dan arahkan kembali ke halaman sebelumnya
        return redirect()->back()->withInput()->with('error', 'Kode Invoice harus diisi.');
    }
    $id_paket = $this->request->getPost('id_paket');
        if (empty($id_paket)) {
        // Penanganan kesalahan jika kode_invoice kosong
        // Misalnya, tampilkan pesan kesalahan dan arahkan kembali ke halaman sebelumnya
        return redirect()->back()->withInput()->with('error', 'ID Paket harus diisi.');
    }
        $data = [
            'kode_invoice' => $kode_invoice,
            'tgl_transaksi' => $this->request->getPost('tgl_transaksi'),
            'id_paket' => $id_paket,
            'tanggal_selesai' => $this->request->getPost('tanggal_selesai'),
            'status_cucian' => $this->request->getPost('status_cucian'),
            'status_bayar' => $this->request->getPost('status_bayar'),
            'id' => $this->request->getPost('id'),
            'id_member' => $this->request->getPost('id_member'),
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'telepon' => $this->request->getPost('telepon')

        ];
        $this->TransaksiModel->save($data);
        // dd($data);
        return redirect()->to('transaksi');
    }
}