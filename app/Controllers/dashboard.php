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
        return view('dashboard/admin');
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
        return view('dashboard/kasir');
    }
    public function owner()
    {
        return view('dashboard/owner');
    }
    public function paket()
    {
        return view('dashboard/paket');
    }
    public function tambahpaket()
    {
        return view('dashboard/tambahpaket');
    }
}
