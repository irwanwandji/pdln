<?php

namespace App\Controllers;

use App\Models\ModelNegara;
use App\Models\ModelPegawai;
use App\Models\ModelUnor;
use App\Models\ModelSatker;

class Form extends BaseController
{
    public function __construct()
    {
        $this->negara = new ModelNegara();
        $this->unor = new ModelUnor();
        $this->satker = new ModelSatker();
    }

    public function index(): string
    {
        $data = [
            'tampilunor' => $this->unor->findAll(),
            'tampilsatker' => $this->satker->findAll(),
        ];
        return view('user/formPermohonanBaru', $data);
    }

    public function simpan()
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'nik' => $this->request->getPost('nik'),
            'nip' => $this->request->getPost('nip'),
            'jabatan' => $this->request->getPost('jabatan'),
            'unor' => $this->request->getPost('unor'),
            'satker' => $this->request->getPost('satker'),
            'telp' => $this->request->getPost('telp'),
            'email' => $this->request->getPost('email'),
            'foto' => "0",
            'ktp' => "0",
            'kk' => "0",
            'akta_lahir' => "0",
            'sk_terakhir' => "0",
            'ijazah' => "0",
            'karpeg_depan' => "0",
            'karpeg_belakang' => "0",
            'input_date' => date('Y-m-d'),

        ];

        $pegawai = new ModelPegawai();
        $simpan = $pegawai->simpan($data);

        if ($simpan) {
            $pesan = [
                'sukses' => '
                
                <center><h5><i class="icon fas fa-check"></i><font color="White"> Data Pegawai Berhasil Disimpan.</font></h5> </center>
              '
            ];
            session()->setFlashdata($pesan);
            return redirect()->to('home');
        }
    }
    public function forminputdatapermohonan(): string
    {
        $data = [
            'tampilnegara' => $this->negara->findAll(),
        ];

        return view('user/formPermohonan', $data);
    }
    public function formPermohonanRalat(): string
    {
        return view('user/formPermohonanRalat');
    }
}
