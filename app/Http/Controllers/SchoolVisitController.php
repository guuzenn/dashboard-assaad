<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SchoolVisit;

class SchoolVisitController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'namaCalonPeserta' => 'required',
            'ttlCalonPeserta' => 'required',
            'namaPanggilanCalonPeserta' => 'required',
            'namaWaliMurid' => 'required',
            'alamatDomisili' => 'required',
            'noTeleponWaliMurid' => 'required',
            'kelas' => 'required',
            'jenjang' => 'required',
        ]);

        SchoolVisit::create([
            'nama_calon_peserta' => $request->namaCalonPeserta,
            'ttl_calon_peserta' => $request->ttlCalonPeserta,
            'nama_panggilan_calon_peserta' => $request->namaPanggilanCalonPeserta,
            'nama_wali_murid' => $request->namaWaliMurid,
            'alamat_domisili' => $request->alamatDomisili,
            'no_telepon_wali_murid' => $request->noTeleponWaliMurid,
            'kelas' => $request->kelas,
            'jenjang' => $request->jenjang,
        ]);

        return redirect()->back()->with('success', 'Formulir School Visit berhasil dikirim!');
    }
}
