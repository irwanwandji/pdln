<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelNegara extends Model
{
    protected $table            = 'tb_negara';
    protected $primaryKey       = 'kd_negara';
    protected $allowedFields    = [
        'kd_negara', 'nama_negara'
    ];
    function tampilsakter()
    {
        return $this->table('tb_negara')->get();
    }
}
