<?php

namespace App\Controllers;

class Daftar extends BaseController
{
    public function index(): string
    {
        return view('user/daftarTiket');
    }
}
