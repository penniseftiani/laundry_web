<?php

namespace App\Controllers;

use App\Models\DetailTransaksiModel;
use App\Models\PaketModel;
use App\Models\UserModel;
use App\Models\MemberModel;
use App\Models\PembayaranModel;
use App\Models\TransaksiModel;

class Transaksi extends BaseController
{
    protected $PembayaranModel;
    protected $DetailTransaksiModel;
    protected $TransaksiModel;
    protected $PaketModel;
    protected $UserModel;
    protected $MemberModel;
    private $title = 'Master Transaksi';
    public function __construct()
    {
        $this->PembayaranModel = new PembayaranModel();
        $this->DetailTransaksiModel = new DetailTransaksiModel();
        $this->TransaksiModel = new TransaksiModel();
        $this->PaketModel = new PaketModel();
        $this->UserModel = new UserModel();
        $this->MemberModel = new MemberModel();
    }
    function ajax_member()
    {
        $id_member = $this->request->getVar('id_member');
        $result = $this->MemberModel->find($id_member);
        echo json_encode($result);
    }
    public function index()
    {
        $transaksi = $this->TransaksiModel->join('user', 'user.id = transaksi.id_user')->orderBy('id', 'DESC')->findAll();
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
            'paket' => $this->PaketModel->join('jenis_paket', 'jenis_paket.id_jenis_paket = paket.id_jenis_paket')->findAll(),
            'user' => $this->UserModel->findAll(),
            'member' => $this->MemberModel->findAll(),
            'detail_transaksi' => $this->DetailTransaksiModel->join('paket', 'paket.id_paket = detail_transaksi.id_paket')->join('jenis_paket', 'jenis_paket.id_jenis_paket = paket.id_jenis_paket')->where('id_transaksi', 0)->findAll()
        ];
        echo view('transaksi/new', $data);
    }
    public function add_detail()
    {
        $id_paket = $this->request->getPost('id_paket');
        $qty = $this->request->getPost('qty');
        $data_paket = $this->PaketModel->find($id_paket);
        $data = [
            'id_paket' => $id_paket,
            'qty' => $qty,
            'id_transaksi' => 0,
            'subtotal' => $data_paket['harga_paket'] * $qty,
        ];
        $this->DetailTransaksiModel->save($data);
        return redirect()->to('transaksi/new');
    }
    public function dell_detail($id)
    {
        $result = $this->DetailTransaksiModel->find($id);

        if (!$result) {
            return redirect()->to('transaksi/new');
            // dd($id);
        }
        $this->DetailTransaksiModel->delete($id);


        return redirect()->to('transaksi/new');
    }
    public function create()
    {
        $kode_invoice = $this->request->getPost('kode_invoice');
        if (empty($kode_invoice)) {
            // Penanganan kesalahan jika kode_invoice kosong
            // Misalnya, tampilkan pesan kesalahan dan arahkan kembali ke halaman sebelumnya
            return redirect()->back()->withInput()->with('error', 'Kode Invoice harus diisi.');
        }

        $total = $this->DetailTransaksiModel->select('SUM(subtotal) as total')->where('id_transaksi', 0)->first()['total'];
        $id_member = $this->request->getPost('id_member');
        $data = [
            'total' => $total,
            'kode_invoice' => $kode_invoice,
            'tgl_transaksi' => $this->request->getPost('tgl_transaksi'),
            'tanggal_selesai' => $this->request->getPost('tanggal_selesai'),
            'status_cucian' => $this->request->getPost('status_cucian'),
            'status_bayar' => $this->request->getPost('status_bayar'),
            'id_user' => session()->get('id'),
            'id_member' => $this->request->getPost('id_member'),
        ];

        if ($id_member == 1) {
            // jika umum
            $data['nama'] = $this->request->getPost('nama');
            $data['alamat'] = $this->request->getPost('alamat');
            $data['telepon'] = $this->request->getPost('telepon');
        } else {
            // jika member ambil data nya
            $data_member = $this->MemberModel->find($id_member);
            $data['nama'] = $data_member['nama'];
            $data['alamat'] = $data_member['alamat'];
            $data['telepon'] = $data_member['telepon'];
        }
        // dd($data);
        $this->TransaksiModel->save($data);
        $id_transaksi = $this->TransaksiModel->orderBy('id_transaksi', 'DESC')->first()['id_transaksi'];

        $data_detail = [
            'id_transaksi' => $id_transaksi
        ];
        $this->DetailTransaksiModel->where('id_transaksi', 0)->update(null, $data_detail);

        $data_pembayaran = [
            'id_transaksi' => $id_transaksi,
            'total_harga' => $total,
            'uang_yang_dibayar' => 0,
            'kembalian' => 0,
        ];
        $this->PembayaranModel->save($data_pembayaran);
        // dd($data);
        return redirect()->to('transaksi');
    }
}
