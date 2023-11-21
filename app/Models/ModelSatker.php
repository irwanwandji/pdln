<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSatker extends Model
{
    protected $table            = 'tb_satker';
    protected $primaryKey       = 'id';
    protected $allowedFields    = [
        'id', 'kd_satker', 'kd_unor', 'nama_satker'
    ];
    function tampilsatker()
    {
        return $this->table('tb_satker')->get();
    }
}
