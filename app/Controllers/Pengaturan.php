<?php

namespace App\Controllers;

use App\Models\M_pengaturan;

class Pengaturan extends BaseController
{
    public function __construct()
    {
        $this->M_pengaturan = new M_pengaturan();
    }
    
    public function index()
    {
        $db = \Config\Database::connect();
        $qry = $db->query("SELECT * FROM pengaturan;");
        $row = $qry->getRowArray();

        var_dump($row);

        $data = array(
            'title' => 'Pengaturan',
            'data' =>$row
        );

        return view('pengaturan', $data);
    }

    public function simpan()
	{
		$this->M_pengaturan->save([
            'id'      => $this->request->getVar('id'),
            'nama'    => $this->request->getVar('nama'),
            'denda'   => $this->request->getVar('denda'),
            'tentang' => $this->request->getVar('tentang'),
        ]);

		echo json_encode('sukses');
	}
}
