<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{

    public function __construct()
    {
    }

    //fungsi buat nampilkan halaman login
    public function index()
    {
        // cek jika sudah masuk
        if (session()->get('logged_in')) {
            // kalau sudah masuk di lempar ke halaman dashboard
            return redirect()->to('dashboard');
        }
        // jika belum masuk 
        return view('auth/login');
    }

    //fungsi buat melakukan login
    public function login()
    {

        // menyiapkan model
        $userModels = new UserModel();

        // mengambil data dari tampilan login
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        // Cek dan cari username yang ada di tabel user
        $cekUser = $userModels->where('username', $username)->first();
        if ($cekUser != null) //
        {
            // mengecek password kalau username ditemukan
            if ($password == $cekUser['password']) {
                // jika password yang di masukan benar maka dibuatkan sesi bahwa sudah masuk

                // menyiapkan data yang masuk
                $data_login = [
                    'id' => $cekUser['id'],
                    'username' => $cekUser['username'],
                    'role' => $cekUser['role'],
                    'logged_in' => true,
                ];

                // mengatur data session yang masuk
                session()->set($data_login);

                //masuk ke halaman dashboard
                // cek jika role yang login adalah admin maka pindah ke dashboard admin, dan seterusnya
                if ($cekUser['role'] == 'admin') {
                    return redirect()->to('dashboard');
                } else if ($cekUser['role'] == 'kasir') {
                    return redirect()->to('dashboard/kasir');
                } else if ($cekUser['role'] == 'owner') {
                    return redirect()->to('dashboard/owner');
                }
            } else {
                // jika password yang di masukan salah maka kembali ke halaman login
                return redirect()->back()->with('error', 'Password yang dimasukan salah!');
            }
        } else {
            // jika username tidak di temukan maka kembali ke halaman login
            return redirect()->back()->with('error', 'Nama pengguna yang dimasukan tidak ditemukan!');
        }
    }

    public function logout()
    {
        // menghapus session yang sudah login
        $this->session->destroy();
        //kembali ke halaman login
        return redirect()->to('login');
    }
}
