<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Nilai;
use App\Models\Siswa;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        // $nilai = [
        //     (object)[
        //         'id' => 1,
        //         'murid' => (object)['nama_lengkap' => 'Andi Saputra'],
        //         'kelas' => (object)['nama' => 'TK A'],
        //         'semester' => 'Ganjil',
        //         'rata_rata' => 87.5,
        //         'catatan' => 'Perkembangan sangat baik dan aktif di kelas.',
        //     ],
        //     (object)[
        //         'id' => 2,
        //         'murid' => (object)['nama_lengkap' => 'Siti Aisyah'],
        //         'kelas' => (object)['nama' => 'TK B'],
        //         'semester' => 'Genap',
        //         'rata_rata' => 90.0,
        //         'catatan' => 'Sangat rajin dan cepat memahami materi.',
        //     ],
        // ];

        // $rataRataTK_A = 87.5;
        // $rataRataTK_B = 90.0;

        $nilai = Nilai::with('siswa')->get();
        return view('data.nilai.index', compact('nilai'));
    }

    public function show($id)
    {
        // $nilai = (object)[
        //     'id' => $id,
        //     'murid' => (object)['nama_lengkap' => 'Andi Saputra'],
        //     'kelas' => (object)['nama' => 'TK A'],
        //     'semester' => 'Ganjil',
        //     'rata_rata' => 87.5,
        //     'catatan' => 'Perkembangan sangat baik dan aktif di kelas.',
        // ];

        $nilai = Nilai::findOrFail($id);
        $siswa = Siswa::all();
        $kelas = Kelas::all();
        return view('data.nilai.show', compact('nilai','siswa','kelas'));
    }

    public function edit($id)
    {
        // $nilai = (object)[
        //     'id' => $id,
        //     'murid_id' => 1,
        //     'kelas_id' => 1,
        //     'murid' => (object)['nama_lengkap' => 'Andi Saputra'],
        //     'kelas' => (object)['nama' => 'TK A'],
        //     'semester' => 'Ganjil',
        //     'rata_rata' => 87.5,
        //     'catatan' => 'Perkembangan sangat baik dan aktif di kelas.',
        // ];

        // $murid = [
        //     (object)['id' => 1, 'nama_lengkap' => 'Andi Saputra'],
        //     (object)['id' => 2, 'nama_lengkap' => 'Siti Aisyah'],
        // ];

        // $kelas = [
        //     (object)['id' => 1, 'nama' => 'TK A'],
        //     (object)['id' => 2, 'nama' => 'TK B'],
        // ];
        $nilai = Nilai::findOrFail($id);
        $siswa = Siswa::all();
        $kelas = Kelas::all();
        return view('data.nilai.edit', compact('nilai', 'siswa', 'kelas'));
    }

    public function create()
    {
        // $murid = [
        //     (object)['id' => 1, 'nama_lengkap' => 'Ayu Permata'],
        //     (object)['id' => 2, 'nama_lengkap' => 'Budi Santoso'],
        // ];


        // $kelas = [
        //     (object)['id' => 1, 'nama' => 'TK A'],
        //     (object)['id' => 2, 'nama' => 'TK B'],
        // ];
        $murid = Siswa::all();
        $kelas = Kelas::all();
        return view('data.nilai.create', compact('murid', 'kelas'));
    }

    public function store(Request $request ){
        $request->validate([
            'siswa_id' => 'required|string',
            'kelas_id' => 'required|string',
            'deskripsi' => 'nullable|string',
            'semester' => 'required|string',
            'nilai' => 'required|numeric',
        ]);

        Nilai::create([
            'siswa_id' => $request->siswa_id,
            'kelas_id' => $request->kelas_id,
            'deskripsi' => $request->deskripsi,
            'semester' => $request->semester,
            'nilai' => $request->nilai,
        ]);

        return redirect()->route('data.nilai.index')->with('success', 'Nilai berhasil ditambahkan');

    }

    public function update(Request $request, $id){
        $request->validate([
            'siswa_id' => 'required|string',
            'kelas_id' => 'required|string',
            'deskripsi' => 'nullable|string',
            'semester' => 'required|string',
            'nilai' => 'required|numeric',
        ]);

        $nilai = Nilai::findOrFail($id);
        $nilai->update([
            'siswa_id' => $request->siswa_id,
            'kelas_id' => $request->kelas_id,
            'deskripsi' => $request->deskripsi,
            'semester' => $request->semester,
            'nilai' => $request->nilai,
        ]);

        return redirect()->route('data.nilai.index')->with('success', 'Nilai berhasil diubah');

    }

    public function destroy($id)
    {
        Nilai::findOrFail($id)->delete();
        return redirect()->route('data.nilai.index')->with('success', 'Nilai berhasil dihapus');
    }


}