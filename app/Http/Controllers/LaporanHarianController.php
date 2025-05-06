<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanHarianController extends Controller
{
    public function index()
    {
        $kelas_list = [
            (object)['id' => 1, 'nama' => 'TK A'],
            (object)['id' => 2, 'nama' => 'TK B'],
        ];

        $laporan = [
            (object)[
                'id' => 1,
                'tanggal' => '2024-06-01',
                'judul' => 'Kegiatan Menggambar',
                'deskripsi' => 'Anak-anak belajar menggambar hewan.',
                'foto' => 'https://via.placeholder.com/150',
                'kelas' => (object)['id' => 1, 'nama' => 'TK A'],
            ],
            (object)[
                'id' => 2,
                'tanggal' => '2024-06-02',
                'judul' => 'Senam Pagi',
                'deskripsi' => 'Senam pagi bersama di halaman.',
                'foto' => 'https://via.placeholder.com/150',
                'kelas' => (object)['id' => 2, 'nama' => 'TK B'],
            ],
        ];

        return view('data.laporan_harian.index', compact('laporan', 'kelas_list'));
    }

    public function show($id)
    {
        $dummy = [
            1 => (object)[
                'id' => 1,
                'judul' => 'Kegiatan Mewarnai',
                'tanggal' => '2024-06-01',
                'kelas' => (object)['id' => 1, 'nama' => 'TK A'],
                'deskripsi' => 'Anak-anak belajar mengenal warna melalui kegiatan mewarnai bersama guru.',
                'foto' => 'https://via.placeholder.com/150',
            ],
            2 => (object)[
                'id' => 2,
                'judul' => 'Senam Pagi',
                'tanggal' => '2024-06-03',
                'kelas' => (object)['id' => 2, 'nama' => 'TK B'],
                'deskripsi' => 'Senam pagi bersama sebagai rutinitas sebelum belajar.',
                'foto' => 'https://via.placeholder.com/150',
            ],
            3 => (object)[
                'id' => 3,
                'judul' => 'Menanam Sayur',
                'tanggal' => '2024-06-04',
                'kelas' => (object)['id' => 1, 'nama' => 'TK A'],
                'deskripsi' => 'Mengenalkan konsep bercocok tanam kepada siswa melalui praktik langsung.',
                'foto' => 'https://via.placeholder.com/150',
            ],
        ];

        $laporan = $dummy[$id] ?? abort(404);

        return view('data.laporan_harian.show', compact('laporan'));
    }

    public function create()
    {
        $kelas_list = [
            (object)['id' => 1, 'nama' => 'TK A'],
            (object)['id' => 2, 'nama' => 'TK B'],
        ];

        return view('data.laporan_harian.create', compact('kelas_list'));
    }

    public function store(Request $request)
    {
        // Dummy save log
        logger('Data yang diterima:', $request->all());

        return redirect()->route('data.laporan_harian.index')->with('success', 'Laporan harian berhasil ditambahkan (dummy).');
    }

    public function edit($id)
    {
        $kelas_list = [
            (object)['id' => 1, 'nama' => 'TK A'],
            (object)['id' => 2, 'nama' => 'TK B'],
        ];

        $laporan = (object)[
            'id' => $id,
            'judul' => 'Dummy Edit Laporan',
            'tanggal' => '2024-06-05',
            'deskripsi' => 'Deskripsi laporan dummy untuk edit.',
            'kelas_id' => 1,
            'kelas' => (object)['id' => 1, 'nama' => 'TK A'],
            'foto' => 'https://via.placeholder.com/150',
        ];

        return view('data.laporan_harian.edit', compact('laporan', 'kelas_list'));
    }

    public function update(Request $request, $id)
    {
        // Dummy update log
        logger("Update laporan id $id dengan data:", $request->all());

        return redirect()->route('data.laporan_harian.index')->with('success', 'Laporan harian berhasil diperbarui (dummy).');
    }
}
