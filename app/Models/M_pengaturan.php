<?php

namespace App\Models;

use CodeIgniter\Model;

class M_pengaturan extends Model
{
    protected $table      = 'pengaturan';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['nama', 'denda', 'tentang'];

    protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function getPengaturanAll()
    {
        return $this->findAll();
    }
    
}