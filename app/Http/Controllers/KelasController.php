<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = [
            (object)[
                'id' => 1,
                'nama' => 'TK A',
                'tahun_ajar' => '2024/2025',
                'waliKelas' => (object)['nama' => 'Bu Rina'],
                'status' => 'aktif',
                'total_murid' => 15,
            ],
            (object)[
                'id' => 2,
                'nama' => 'TK B',
                'tahun_ajar' => '2024/2025',
                'waliKelas' => (object)['nama' => 'Pak Budi'],
                'status' => 'non-aktif',
                'total_murid' => 0,
            ],
        ];


        return view('data.kelas.index', compact('kelas'));
    }

    public function create()
    {
        $guru = [
            (object)['id' => 1, 'nama' => 'Bu Rina'],
            (object)['id' => 2, 'nama' => 'Pak Budi'],
        ];
    
        return view('data.kelas.create', compact('guru'));
    }

    public function edit($id)
    {
        $kelas = (object)[
            'id' => $id,
            'nama' => 'TK A',
            'tahun_ajar' => '2024/2025',
            'waliKelas' => (object)['id' => 1, 'nama' => 'Bu Rina'],
            'wali_kelas_id' => 1,
            'status' => 'aktif',
            'total_murid' => 15,
        ];

        $guru = [
            (object)['id' => 1, 'nama' => 'Bu Rina'],
            (object)['id' => 2, 'nama' => 'Pak Budi'],
        ];

        return view('data.kelas.edit', compact('kelas', 'guru'));
    }

    public function show($id)
    {
        $kelas = (object)[
            'id' => $id,
            'nama' => 'TK A',
            'tahun_ajar' => '2024/2025',
            'waliKelas' => (object)['nama' => 'Bu Rina'],
            'status' => 'aktif',
            'total_murid' => 15,
        ];

        return view('data.kelas.show', compact('kelas'));
    }
}
