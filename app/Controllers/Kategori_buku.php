<?php

namespace App\Controllers;

use App\Models\M_kategori;

class Kategori_buku extends BaseController
{
    public function __construct()
    {
        $this->M_kategori = new M_kategori();
    }

    public function index()
    {
        $data = array(
            'title' => 'Data Katgeori Buku'
        );

        return view('buku/v_kategori', $data);
    }

    public function read()
    {

        header('Content-Type: application/json');

        $data = array(
            'data' => $this->M_kategori->getKategoriBukuAll()
        );
		echo json_encode($data);
    }

    public function add()
	{
		$this->M_kategori->save([
            'nama'          => $this->request->getVar('nama'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
        ]);

		echo json_encode('sukses');
	}

    public function edit($id)
	{
		$this->M_kategori->save([
            'id'            => $id,
            'nama'          => $this->request->getVar('nama'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
        ]);

        echo json_encode('sukses');
	}

	public function delete($id)
	{
        $this->M_kategori->delete($id);

        echo json_encode('sukses');
	}
}
