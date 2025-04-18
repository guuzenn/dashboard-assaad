<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        $nilai = [
            (object)[
                'id' => 1,
                'murid' => (object)['nama_lengkap' => 'Andi Saputra'],
                'kelas' => (object)['nama' => 'TK A'],
                'semester' => 'Ganjil',
                'rata_rata' => 87.5,
                'catatan' => 'Perkembangan sangat baik dan aktif di kelas.',
            ],
            (object)[
                'id' => 2,
                'murid' => (object)['nama_lengkap' => 'Siti Aisyah'],
                'kelas' => (object)['nama' => 'TK B'],
                'semester' => 'Genap',
                'rata_rata' => 90.0,
                'catatan' => 'Sangat rajin dan cepat memahami materi.',
            ],
        ];

        $rataRataTK_A = 87.5;
        $rataRataTK_B = 90.0;

        return view('data.nilai.index', compact('nilai', 'rataRataTK_A', 'rataRataTK_B'));
    }

    public function show($id)
    {
        $nilai = (object)[
            'id' => $id,
            'murid' => (object)['nama_lengkap' => 'Andi Saputra'],
            'kelas' => (object)['nama' => 'TK A'],
            'semester' => 'Ganjil',
            'rata_rata' => 87.5,
            'catatan' => 'Perkembangan sangat baik dan aktif di kelas.',
        ];

        return view('data.nilai.show', compact('nilai'));
    }

    public function edit($id)
    {
        $nilai = (object)[
            'id' => $id,
            'murid_id' => 1,
            'kelas_id' => 1,
            'murid' => (object)['nama_lengkap' => 'Andi Saputra'],
            'kelas' => (object)['nama' => 'TK A'],
            'semester' => 'Ganjil',
            'rata_rata' => 87.5,
            'catatan' => 'Perkembangan sangat baik dan aktif di kelas.',
        ];

        $murid = [
            (object)['id' => 1, 'nama_lengkap' => 'Andi Saputra'],
            (object)['id' => 2, 'nama_lengkap' => 'Siti Aisyah'],
        ];

        $kelas = [
            (object)['id' => 1, 'nama' => 'TK A'],
            (object)['id' => 2, 'nama' => 'TK B'],
        ];

        return view('data.nilai.edit', compact('nilai', 'murid', 'kelas'));
    }

    public function create()
    {
        $murid = [
            (object)['id' => 1, 'nama_lengkap' => 'Ayu Permata'],
            (object)['id' => 2, 'nama_lengkap' => 'Budi Santoso'],
        ];

        $kelas = [
            (object)['id' => 1, 'nama' => 'TK A'],
            (object)['id' => 2, 'nama' => 'TK B'],
        ];

        return view('data.nilai.create', compact('murid', 'kelas'));
    }

}
