<?php

namespace App\Controllers;

use App\Models\ModelNegara;

class Form extends BaseController
{
    public function __construct()
    {
        $this->negara = new ModelNegara();
    }

    public function index(): string
    {
        return view('user/formPermohonanBaru');
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
