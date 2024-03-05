<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    //fungsi buat nampilkan halaman login
    public function index()
    {
        return view('auth/login');
    }

    //fungsi buat melakukan login
    public function login(){
        $userModels = new UserModel();

        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        // Cek dan cari username yang ada di tabel user
        $cekUser = $userModels->where('username', $username)->first();
        if($cekUser != null) //
        {
            // mengecek password kalau username ditemukan
            if($password == $cekUser['password']){
                // jika password yang di masukan benar maka lakukan cek role/level
                dd($cekUser);
            } else {
                // jika password yang di masukan salah maka kembali ke halaman login
                return redirect()->back();
            }
        } else {
            // jika username tidak di temukan maka kembali ke halaman login
            return redirect()->back();
        }
    }


}
