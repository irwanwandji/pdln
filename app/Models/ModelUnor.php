<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUnor extends Model
{
    protected $table            = 'tb_unor';
    protected $primaryKey       = 'kd_unor';
    protected $allowedFields    = [
        'kd_unor', 'nama_unor'
    ];
    function tampilunor()
    {
        return $this->table('tb_unor')->get();
    }
}
