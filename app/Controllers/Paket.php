<?php

namespace App\Controllers;

use App\Models\JenisPaketModel;
use App\Models\PaketModel;

class Paket extends BaseController
{
    protected $PaketModel;
    protected $JenisPaketModel;
    private $title = 'Master Paket';
    public function __construct()
    {
        $this->PaketModel = new PaketModel();
        $this->JenisPaketModel = new JenisPaketModel();
    }
    public function index()
    {
        $paket = $this->PaketModel->findAll();
        $data = [
            'title' => $this->title,
            'paket' => $this->PaketModel->getAll()
        ];
        echo view('paket/index', $data);
    }
    public function new()
    { {
            $data = [
                'title' => 'Tambah Paket',
                'paket' => $this->JenisPaketModel->findAll()
            ];
            // dd($data);
            echo view('paket/new', $data);
        }
    }
    public function create()
    {
        $data = [
            'nama_paket' => $this->request->getPost('nama_jenis_paket'),
            'harga_paket' => $this->request->getPost('harga_paket'),
            'id_jenis_paket' => $this->request->getPost('id_jenis_paket')
        ];
        $this->JenisPaketModel->save($data);
        // dd($data);
        return redirect()->to('paket');
    }
    public function edit($id_paket = false)
    {
        $result = $this->PaketModel->find($id_paket);

        if (!$result) {
            return redirect()->to('Paket');
        }
        $data = [
            'title' => 'Form edit JenisPaket ',
            'validation' => \Config\Services::validation(),
            'jenis_paket' => $this->JenisPaketModel->findAll(),
            'paket' => $result
        ];

        echo view('jenispaket/edit', $data);
    }
    public function update($id = false)
    {
        $result = $this->PaketModel->find($id);

        if (!$result) {
            return redirect()->to('paket');
        }
        //dd($result);
        $data = [
            'nama_paket' => $this->request->getPost('nama_paket'),
            'harga_paket' => $this->request->getPost('harga_paket'),
            'id_jenis_paket' => $this->request->getPost('id_jenis_paket')
        ];
        $this->PaketModel->update($id, $data);
        // dd($data);   
        return redirect()->to('paket');
    }
    public function delete($id = false)
    {
        $result = $this->PaketModel->find($id);

        if (!$result) {
            return redirect()->to('paket');
        }
        $this->PaketModel->delete($id);


        return redirect()->to('paket');
    }
}
