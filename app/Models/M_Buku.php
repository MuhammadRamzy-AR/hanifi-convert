<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Buku extends Model
{
    protected $table      = 'buku';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['kode','nama', 'kategori', 'jumlah', 'dipinjam'];

    protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function getBukuAll()
    {
        $builder = $this->db->table("buku");
        $builder->select('*, kategori_buku.nama as kategori, buku.nama as judul, kategori_buku.id as id_kategori, buku.id as id_buku');
        $builder->join('kategori_buku', 'kategori_buku.id = buku.kategori');
        $data = $builder->get()->getResultArray();
        
        return $data;
    }
}
