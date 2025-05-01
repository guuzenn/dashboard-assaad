<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontenController extends Controller
{
    public function visiMisi()
    {
        return view('konten.visi_misi.index');
    }

    public function kegiatan()
    {
        return view('konten.kegiatan.index'); // jika file-nya memang ada di sana
    }
}