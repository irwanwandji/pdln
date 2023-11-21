<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPegawai extends Model
{
    protected $table            = 'tb_pegawai';
    protected $primaryKey       = 'id_pegawai';
    protected $allowedFields    = [
        'id_pegawai', 'nama', 'nik', 'nip', 'jabatan', 'unor', 'satker', 'telp', 'email', 'foto', 'ktp', 'kk', 'akta_lahir', 'sk_terakhir', 'ijazah', 'karpeg_depan', 'karpeg_belakang', 'input_date'
    ];
    function tampilpegawai()
    {
        return $this->table('tb_pegawai')->get();
    }

    function simpan($data)
    {
        return $this->table('tb_pegawai')->insert($data);
    }
}
