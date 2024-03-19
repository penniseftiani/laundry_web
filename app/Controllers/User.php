<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    protected $UserModel;
    private $title = 'Master User';
    public function __construct()
    {
        $this->UserModel = new UserModel();
    }
    public function index()
    {
        $user = $this->UserModel->findAll();
        $data = [
            'title' => $this->title,
            'user' => $user
        ];
        //dd($data);
        echo view('user/index', $data);
    }
    public function new()
    {
        $data = [
            'title' => 'Tambah User',
        ];
        // dd($data);
        echo view('user/new', $data);
    }
    public function create()
    {
        $data = [
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'role' => $this->request->getPost('role')
        ];
        $this->UserModel->save($data);
        //dd($data);
        return redirect()->to('user');
    }
    public function edit($id = false)
    {
        $result = $this->UserModel->find($id);

        if (!$result) {
            return redirect()->to('user');
        }
        $data = [
            'title' => 'Form edit user ',
            'validation' => \Config\Services::validation(),
            'user' => $result
        ];

        echo view('user/edit', $data);
    }
    public function update($id = false)
    {
        $result = $this->UserModel->find($id);

        if (!$result) {
            return redirect()->to('user');
        }
        //dd($result);
        $data = [
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'role' => $this->request->getPost('role')
        ];
        $this->UserModel->update($id, $data);
        // dd($data);   
        return redirect()->to('user');
    }
    public function delete($id = false)
    {
        $result = $this->UserModel->find($id);

        if (!$result) {
            return redirect()->to('user');
        }
        $this->UserModel->delete($id);

        return redirect()->to('user');
    }
}
