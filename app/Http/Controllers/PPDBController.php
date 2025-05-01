<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PPDBController extends Controller
{
    public function index()
    {
        $ppdb = [
            (object)[
                'id' => 1,
                'nama_lengkap' => 'Aisyah Putri',
                'nama_panggilan' => 'Aisyah',
                'jenjang_kelas' => 'TK A',
                'tempat_lahir' => 'Jakarta',
                'tanggal_lahir' => '2018-03-15',
                'usia' => '6 tahun 4 bulan',
                'jenis_kelamin' => 'Perempuan',
                'agama' => 'Islam',
                'anak_ke' => 1,
                'status_keluarga' => 'Anak Kandung',
                'jumlah_saudara' => 2,
                'alamat' => 'Jl. Melati No. 12, Jakarta',
                'penyakit_bawaan' => null,
                'alergi' => 'Susu sapi',
                'pengawasan_medis' => null,
                'cedera_serius' => 'Pernah jatuh dari sepeda, 2023',
                'nama_ayah' => 'Ahmad Fauzi',
                'pekerjaan_ayah' => 'Karyawan Swasta',
                'hp_ayah' => '081234567890',
                'nama_ibu' => 'Siti Rahma',
                'pekerjaan_ibu' => 'Ibu Rumah Tangga',
                'hp_ibu' => '081234567891',
                'status_pendaftaran' => 'Diterima',
                'status_pembayaran' => 'Lunas',
                'tanggal_daftar' => '2024-05-01',
            ],
            (object)[
                'id' => 2,
                'nama_lengkap' => 'Budi Santoso',
                'nama_panggilan' => 'Budi',
                'jenjang_kelas' => 'TK B',
                'tempat_lahir' => 'Bandung',
                'tanggal_lahir' => '2017-10-20',
                'usia' => '7 tahun',
                'jenis_kelamin' => 'Laki-laki',
                'agama' => 'Kristen',
                'anak_ke' => 2,
                'status_keluarga' => 'Anak Angkat',
                'jumlah_saudara' => 1,
                'alamat' => 'Jl. Kenanga No. 45, Bandung',
                'penyakit_bawaan' => 'Asma',
                'alergi' => null,
                'pengawasan_medis' => 'Mengonsumsi obat asma rutin',
                'cedera_serius' => null,
                'nama_ayah' => 'Slamet Riyadi',
                'pekerjaan_ayah' => 'Pedagang',
                'hp_ayah' => '081298765432',
                'nama_ibu' => 'Maya Sari',
                'pekerjaan_ibu' => 'Guru',
                'hp_ibu' => '081298765431',
                'status_pendaftaran' => 'Menunggu',
                'status_pembayaran' => 'Belum Lunas',
                'tanggal_daftar' => '2024-05-10',
            ]
        ];

        return view('ppdb.index', compact('ppdb'));
    }

    public function show($id)
    {
        $ppdb = $this->index()->getData()['ppdb'][$id - 1] ?? abort(404);

        return view('ppdb.show', compact('ppdb'));
    }

    public function create()
    {
        return view('ppdb.create');
    }

    public function edit($id)
    {
        $ppdb = $this->index()->getData()['ppdb'][$id - 1] ?? abort(404);

        return view('ppdb.edit', compact('ppdb'));
    }

    public function store(Request $request)
    {
        return redirect()->route('ppdb.index')->with('success', 'Data pendaftaran berhasil disimpan!');
    }
}
