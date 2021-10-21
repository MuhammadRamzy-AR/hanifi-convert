<?php

namespace App\Controllers;

use App\Models\M_anggota;

class Anggota extends BaseController
{
    public function __construct()
    {
        $this->M_anggota = new M_anggota();
    }

    public function index()
    {
        $data = array(
            'title' => 'Data Anggota'
        );

        return view('anggota/v_anggota', $data);
    }

    public function read()
    {

        header('Content-Type: application/json');

        $data = array(
            'data' => $this->M_anggota->getAnggotaAll()
        );
		echo json_encode($data);
    }

    public function add()
	{
		$this->M_anggota->save([
            'nama'          => $this->request->getVar('nama'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
        ]);

		echo json_encode('sukses');
	}

    public function edit($id)
	{
		$this->M_anggota->save([
            'id'            => $id,
            'nama'          => $this->request->getVar('nama'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
        ]);

        echo json_encode('sukses');
	}

	public function delete($id)
	{
        $this->M_anggota->delete($id);

        echo json_encode('sukses');
	}
}
