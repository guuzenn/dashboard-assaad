<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        // Dummy data
        $guru = collect([
            (object)[
                'id' => 1,
                'nama' => 'Hawa Nisya S.Pd',
                'jenis_kelamin' => 'Perempuan',
                'kelas' => 'TK A',
                'no_hp' => '081234567890'
            ],
            (object)[
                'id' => 2,
                'nama' => 'Hadi Sudibyo S.Kom',
                'jenis_kelamin' => 'Laki-laki',
                'kelas' => 'TK B',
                'no_hp' => '089876543210'
            ],
        ]);

        return view('data.guru.index', compact('guru'));
    }

    public function create()
    {
        return view('data.guru.create');
    }

    public function edit($id)
    {
        $guru = (object)[
            'id' => $id,
            'nama' => 'Ibu Rina Mulyani',
            'tanggal_lahir' => '1985-06-12',
            'tempat_lahir' => 'Bandung',
            'jenis_kelamin' => 'Perempuan',
            'kelas' => 'TK A',
            'alamat' => 'Jl. Kenanga No. 10, Bandung',
            'no_hp' => '081234567891',
        ];

        return view('data.guru.edit', compact('guru'));
    }

    public function show($id)
    {
        $guru = (object)[
            'id' => $id,
            'nama' => 'Ibu Rina Mulyani',
            'tanggal_lahir' => '1985-06-12',
            'tempat_lahir' => 'Bandung',
            'jenis_kelamin' => 'Perempuan',
            'kelas' => 'TK A',
            'alamat' => 'Jl. Kenanga No. 10, Bandung',
            'no_hp' => '081234567891',
        ];

        return view('data.guru.show', compact('guru'));
    }

}
