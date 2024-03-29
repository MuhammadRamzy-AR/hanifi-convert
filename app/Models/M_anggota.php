<?php

namespace App\Models;

use CodeIgniter\Model;

class M_anggota extends Model
{
    protected $table      = 'anggota';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['nama', 'jenis_kelamin'];

    protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function getAnggotaAll()
    {
        return $this->findAll();
    }
    
}