<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'mahasiswa';
    protected $primaryKey       = 'nim';
    protected $useAutoIncrement = false;
    protected $allowedFields    = ['nim','nama','jurusan','alamat'];
    
  
    protected function hash(array $data) 
    {
        if (!isset($data['data'][''])) {
            
        }
        $data['data'][''] = hash($data['data'][''], PASSWORD_DEFAULT);

        return $data;
    }
}