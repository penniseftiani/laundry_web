<?php

namespace App\Controllers;

use App\Models\JenisPaketModel;

class JenisPaket extends BaseController
{
    protected $JenisPaketModel;
    private $title = 'Master JenisPaket';
    public function __construct()
    {
        $this->JenisPaketModel = new JenisPaketModel();
    }
    public function index()
    {
        $jenis_paket = $this->JenisPaketModel->findAll();
        $data = [
            'title' => $this->title,
            'jenis_paket' => $jenis_paket
        ];
        echo view('jenispaket/index', $data);
    }
    public function new()
    { {
            $data = [
                'title' => 'Tambah Jenis Paket',
            ];
            // dd($data);
            echo view('jenispaket/new', $data);
        }
    }
    public function create()
    {
        $data = [
            'nama_jenis_paket' => $this->request->getPost('nama_jenis_paket'),
        ];
        $this->JenisPaketModel->save($data);
        // dd($data);
        return redirect()->to('jenispaket');
    }
    public function edit($id_jenis_paket = false)
    {
        $result = $this->JenisPaketModel->find($id_jenis_paket);

        if (!$result) {
            return redirect()->to('JenisPaket');
        }
        $data = [
            'title' => 'Form edit JenisPaket ',
            'validation' => \Config\Services::validation(),
            'jenis_paket' => $result
        ];

        echo view('jenispaket/edit', $data);
    }
    public function update($id = false)
    {
        $result = $this->JenisPaketModel->find($id);

        if (!$result) {
            return redirect()->to('jenispaket');
        }
        //dd($result);
        $data = [
            'nama_jenis_paket' => $this->request->getPost('nama_jenis_paket'),
        ];
        $this->JenisPaketModel->update($id, $data);
        // dd($data);   
        return redirect()->to('jenispaket');
    }
    public function delete($id = false)
    {
        $result = $this->JenisPaketModel->find($id);

        if (!$result) {
            return redirect()->to('jenispaket');
            dd($id);
        }
        $this->JenisPaketModel->delete($id);


        return redirect()->to('jenispaket');
    }
}
