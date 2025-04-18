<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MuridController extends Controller
{
    public function index()
    {
        // Dummy data
        $murid = collect([
            (object)[
                'id' => 1,
                'nama_lengkap' => 'Budi Santoso',
                'tanggal_lahir' => '2015-04-02',
                'jenis_kelamin' => 'Laki-laki',
                'agama' => 'Islam',
                'kelas' => 'TK A'
            ],
            (object)[
                'id' => 2,
                'nama_lengkap' => 'Siti Aminah',
                'tanggal_lahir' => '2016-01-12',
                'jenis_kelamin' => 'Perempuan',
                'agama' => 'Kristen',
                'kelas' => 'TK B'
            ],
        ]);

        $murid->each(function($item) {
            $item->tanggal_lahir = Carbon::parse($item->tanggal_lahir)->format('d/m/Y');
        });

        return view('data.murid.index', compact('murid'));
    }


    public function create()
    {
        return view('data.murid.create');
    }


    public function edit($id)
    {
        // Dummy data
        $murid = (object)[
            'id' => $id,
            'nama_lengkap' => 'Budi Santoso',
            'tanggal_lahir' => '2015-04-02',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'alamat' => 'Jl. Anggrek No. 123',
            'riwayat_penyakit' => 'Asma',
            'nama_ayah' => 'Pak Santoso',
            'pekerjaan_ayah' => 'Petani',
            'hp_ayah' => '081234567890',
            'nama_ibu' => 'Bu Santi',
            'pekerjaan_ibu' => 'Ibu Rumah Tangga',
            'hp_ibu' => '089876543210',
            'kelas_id' => 1, // misalnya TK A
        ];
    
        return view('data.murid.edit', compact('murid'));
    }

    public function show($id)
    {
        $murid = (object)[
            'id' => $id,
            'nama_lengkap' => 'Budi Santoso',
            'tanggal_lahir' => '2015-04-02',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'alamat' => 'Jl. Melati No. 45',
            'riwayat_penyakit' => 'Tidak Ada',
            'nama_ayah' => 'Pak Santoso',
            'pekerjaan_ayah' => 'Petani',
            'hp_ayah' => '081234567890',
            'nama_ibu' => 'Bu Santi',
            'pekerjaan_ibu' => 'Ibu Rumah Tangga',
            'hp_ibu' => '089876543210',
            'kelas' => (object)[
                'nama' => 'TK A',
            ],
        ];

        return view('data.murid.show', compact('murid'));
    }

    

}
