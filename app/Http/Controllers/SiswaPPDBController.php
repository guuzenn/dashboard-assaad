<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaPPDBController extends Controller
{
    public function beranda()
    {
        return view('webppdb.beranda');
    }

    public function formulir()
    {
        return view('webppdb.formulir');
    }

    public function pengumuman()
    {
        return view('webppdb.pengumuman');
    }

    public function uploadBerkas()
    {
        return view('webppdb.upload_berkas');
    }
}
