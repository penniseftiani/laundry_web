<?php

namespace App\Controllers;

use App\Models\DetailTransaksiModel;
use App\Models\PaketModel;
use App\Models\UserModel;
use App\Models\MemberModel;
use App\Models\PembayaranModel;
use App\Models\TransaksiModel;

class dashboard extends BaseController
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

    public function admin()
    {

        //kalau belum login di kembalikan ke halaman login
        if (!session()->get('logged_in')) {
            return redirect()->to('login');
        }
        // $jumlah_transaksi = db_connect()->query("SELECT SUM(total) as total_transaksi FROM transaksi WHERE convert(tgl_transaksi,date) = '2024-05-22';")->getRowArray();

        $total_transaksi = $this->TransaksiModel->select('SUM(total) as total_transaksi')->first();

        $total_pembayaran = $this->PembayaranModel->select('SUM(uang_yang_dibayar) as total_pembayaran')->first();

        // $total_transaksi = $this->TransaksiModel->select('SUM(total) as total_transaksi')->where('convert(tgl_transaksi,date)', '2024-05-22')->first();
        $jumlah_transaksi = $this->TransaksiModel->select("COUNT(total) as total_transaksi")->first();

        $jumlah_pembayaran = $this->PembayaranModel->select("COUNT(id_pembayaran) as total_pembayaran")->where("uang_yang_dibayar != 0")->first();

        $transaksi = $this->TransaksiModel->join('user', 'user.id = transaksi.id_user')->orderBy('id', 'DESC')->where("convert(tgl_transaksi,date)", date("Y-m-d"))->findAll();
        //dd(date("Y-m-d "));

        $data = [
            'transaksi' => $transaksi,
            'total_transaksi' => $total_transaksi['total_transaksi'],
            'total_pembayaran' => $total_pembayaran['total_pembayaran'],
            'jumlah_transaksi' => $jumlah_transaksi['total_transaksi'],
            'jumlah_pembayaran' => $jumlah_pembayaran['total_pembayaran']
        ];
        //dd($total_pembayaran);

        return view('dashboard/admin', $data);
    }

    public function logout()
    {
        // Mengambil instance dari session
        $session = session();

        // Hapus semua data sesi
        $session->destroy();

        // Redirect ke halaman login atau halaman lain yang sesuai
        return redirect()->to(base_url('login'));
    }

    public function kasir()
    {
        $role = session()->get("role");


        $total_transaksi = $this->TransaksiModel->select('SUM(total) as total_transaksi')->first();

        $total_pembayaran = $this->PembayaranModel->select('SUM(uang_yang_dibayar) as total_pembayaran')->first();

        // $total_transaksi = $this->TransaksiModel->select('SUM(total) as total_transaksi')->where('convert(tgl_transaksi,date)', '2024-05-22')->first();
        $jumlah_transaksi = $this->TransaksiModel->select("COUNT(total) as total_transaksi")->first();

        $jumlah_pembayaran = $this->PembayaranModel->select("COUNT(id_pembayaran) as total_pembayaran")->where("uang_yang_dibayar != 0")->first();

        $transaksi = $this->TransaksiModel->join('user', 'user.id = transaksi.id_user')->orderBy('id', 'DESC')->where("convert(tgl_transaksi,date)", date("Y-m-d"))->findAll();
        //dd(date("Y-m-d "));

        $data = [
            'transaksi' => $transaksi,
            'total_transaksi' => $total_transaksi['total_transaksi'],
            'total_pembayaran' => $total_pembayaran['total_pembayaran'],
            'jumlah_transaksi' => $jumlah_transaksi['total_transaksi'],
            'jumlah_pembayaran' => $jumlah_pembayaran['total_pembayaran']
        ];
        //dd($_SESSION);
        return view('dashboard/kasir', $data);
    }
    public function owner()
    {

        $total_transaksi = $this->TransaksiModel->select('SUM(total) as total_transaksi')->first();

        $total_pembayaran = $this->PembayaranModel->select('SUM(uang_yang_dibayar) as total_pembayaran')->first();

        // $total_transaksi = $this->TransaksiModel->select('SUM(total) as total_transaksi')->where('convert(tgl_transaksi,date)', '2024-05-22')->first();
        $jumlah_transaksi = $this->TransaksiModel->select("COUNT(total) as total_transaksi")->first();

        $jumlah_pembayaran = $this->PembayaranModel->select("COUNT(id_pembayaran) as total_pembayaran")->where("uang_yang_dibayar != 0")->first();

        $transaksi = $this->TransaksiModel->join('user', 'user.id = transaksi.id_user')->orderBy('id', 'DESC')->where("convert(tgl_transaksi,date)", date("Y-m-d"))->findAll();
        //dd(date("Y-m-d "));

        $data = [
            'transaksi' => $transaksi,
            'total_transaksi' => $total_transaksi['total_transaksi'],
            'total_pembayaran' => $total_pembayaran['total_pembayaran'],
            'jumlah_transaksi' => $jumlah_transaksi['total_transaksi'],
            'jumlah_pembayaran' => $jumlah_pembayaran['total_pembayaran']
        ];
        // dd($total_transaksi);
        echo view('transaksi/index', $data);
    }
}
