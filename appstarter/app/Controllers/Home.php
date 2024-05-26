<?php

namespace App\Controllers;

use App\Models\TestimoniModel;

class Home extends BaseController
{
    protected $testimoni;

    public function __construct()
    {
        $this->testimoni = new TestimoniModel();
    }

    public function beranda()
    {
        $data = [
            'title' => 'Beranda',
            'testimoni' => $this->testimoni->getTestimonis(),
        ];

        return view('pages/beranda', $data);
    }

    public function daftar_ruko()
    {
        $data = [
            'title' => 'Daftar Ruko',
        ];

        return view('pages/daftar_ruko', $data);
    }

    public function kontak()
    {
        $data = [
            'title' => 'Kontak Pemilik',
        ];

        return view('pages/kontak', $data);
    }
}
