<?php

namespace App\Controllers;

class dashboard extends BaseController
{
    public function admin()
    {
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
