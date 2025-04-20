<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MuridController extends Controller
{
    public function index()
    {
        // Dummy data
        // $murid = collect([
        //     (object)[
        //         'id' => 1,
        //         'nama_lengkap' => 'Budi Santoso',
        //         'tanggal_lahir' => '2015-04-02',
        //         'jenis_kelamin' => 'Laki-laki',
        //         'agama' => 'Islam',
        //         'kelas' => 'TK A'
        //     ],
        //     (object)[
        //         'id' => 2,
        //         'nama_lengkap' => 'Siti Aminah',
        //         'tanggal_lahir' => '2016-01-12',
        //         'jenis_kelamin' => 'Perempuan',
        //         'agama' => 'Kristen',
        //         'kelas' => 'TK B'
        //     ],
        // ]);

        $murid = Siswa::get();

        $murid->each(function($item) {
            $item->tanggal_lahir = Carbon::parse($item->tanggal_lahir)->format('d/m/Y');
        });

        return view('data.murid.index', compact('murid'));
    }


    public function create()
    {
        $kelas = Kelas::all();
        return view('data.murid.create', compact('kelas'));
    }

    public function store(Request $request ){
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'tanggal_lahir' => 'nullable|date',
            'tempat_lahir' => 'nullable|string',
            'usia' => 'nullable|integer',
            'jenis_kelamin' => 'nullable|string',
            'alamat' => 'nullable',
            'agama'=> 'nullable',
            'riwayat_penyakit'=> 'nullable',
            'nama_ayah'=> 'nullable',
            'pekerjaan_ayah'=> 'nullable',
            'hp_ayah'=> 'nullable',
            'nama_ibu'=> 'nullable',
            'pekerjaan_ibu'=> 'nullable',
            'hp_ibu'=> 'nullable',
            'kelas_id'=>'nullable',
            'status_keluarga'=>'nullable'
        ]);

        Siswa::create([
            'nama_lengkap' => $request->nama_lengkap,
            'tanggal_lahir' => $request->tanggal_lahir,
            'tempat_lahir' => $request->tempat_lahir,
            'usia' => $request->usia,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'riwayat_penyakit' => $request->riwayat_penyakit,
            'alamat' => $request->alamat,
            'nama_ayah' => $request->nama_ayah,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'hp_ayah' => $request->hp_ayah,
            'nama_ibu' => $request->nama_ibu,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'hp_ibu' => $request->hp_ibu,
            'kelas_id]' => $request->kelas_id,
            'status_keluarga' => $request->status_keluarga,
        ]);

        return redirect()->route('data.murid.index')->with('success', 'Murid berhasil ditambahkan');

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