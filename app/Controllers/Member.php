<?php

namespace App\Controllers;

use App\Models\MemberModel;

class Member extends BaseController
{
    protected $MemberModel;
    private $title = 'Master Member';
    public function __construct()
    {
        $this->MemberModel = new MemberModel();
    }
    public function index()
    {
        $member = $this->MemberModel->findAll();
        $data = [
            'title' => $this->title,
            'member' => $member
        ];
        echo view('member/index', $data);
    }
    public function new()
    { 
            $data = [
                'title' => 'Tambah Member',
            ];
            // dd($data);
            echo view('member/new', $data);
        
    }
    public function create()
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'telepon' => $this->request->getPost('telepon'),
        ];
        $this->MemberModel->save($data);
        // dd($data);
        return redirect()->to('member');
    }
    public function edit($id_member = false)
    {
        $result = $this->MemberModel->find($id_member);

        if (!$result) {
            return redirect()->to('Member');
        }
        $data = [
            'title' => 'Form edit Member ',
            'validation' => \Config\Services::validation(),
            'member' => $result
        ];

        echo view('member/edit', $data);
    }
    public function update($id = false)
    {
        $result = $this->MemberModel->find($id);

        if (!$result) {
            return redirect()->to('member');
        }
        //dd($result);
        $data = [
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'telepon' => $this->request->getPost('telepon'),
        ];
        $this->MemberModel->update($id, $data);
        // dd($data);   
        return redirect()->to('member');
    }
    public function delete($id = false)
    {
        $result = $this->MemberModel->find($id);

        if (!$result) {
            return redirect()->to('member');
            dd($id);
        }
        $this->MemberModel->delete($id);


        return redirect()->to('member');
    }
}
