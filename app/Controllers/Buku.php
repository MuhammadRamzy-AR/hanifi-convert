<?php

namespace App\Controllers;

use App\Models\M_Buku;
use App\Models\M_kategori;

class Buku extends BaseController
{
    public function __construct()
    {
        $this->M_Buku = new M_Buku();
        $this->M_kategori = new M_kategori();
    }

    public function index()
    {
        // var_dump($this->M_kategori->getKategoriBukuAll());
        $data = array(
            'title' => 'Data Buku',
            'data_kategori' => $this->M_kategori->getKategoriBukuAll()
        );

        return view('Buku/v_Buku', $data);
    }

    public function read()
    {

        header('Content-Type: application/json');

        $data = array(
            'data' => $this->M_Buku->getBukuAll()
        );
        echo json_encode($data);
    }

    public function add()
    {
        $this->M_Buku->save([
            'kode'      => $this->request->getVar('kode'),
            'nama'      => $this->request->getVar('nama'),
            'kategori'  => $this->request->getVar('kategori'),
            'jumlah'    => $this->request->getVar('jumlah'),
        ]);

        echo json_encode('sukses');
    }

    public function edit($id)
    {
        $this->M_Buku->save([
            'id'        => $id,
            'kode'      => $this->request->getVar('kode'),
            'nama'      => $this->request->getVar('nama'),
            'kategori'  => $this->request->getVar('kategori'),
            'jumlah'    => $this->request->getVar('jumlah'),
        ]);

        echo json_encode('sukses');
    }

    public function delete($id)
    {
        $this->M_Buku->delete($id);

        echo json_encode('sukses');
    }
}
