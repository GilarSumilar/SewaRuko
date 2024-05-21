<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function beranda()
    {
        return view('pages/beranda');
    }

    public function daftar_ruko()
    {
        return view('pages/daftar_ruko');
    }

    public function kontak()
    {
        return view('pages/kontak');
    }
}
