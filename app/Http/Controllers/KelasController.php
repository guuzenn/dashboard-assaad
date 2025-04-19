<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use Illuminate\Http\Request;

use function Pest\Laravel\delete;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::get();
        $kelas1 = [
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
        $guru = Guru::all();
        return view('data.kelas.create', compact('guru'));
    }

    public function store(Request $request ){
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'tingkat' => 'required|integer',
            'tahun_ajar' => 'required|string',
            'status' => 'required|in:aktif,non-aktif',
            'guru_id' => 'nullable'
        ]);

        Kelas::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'tingkat' => $request->tingkat,
            'tahun_ajar' => $request->tahun_ajar,
            'status' => $request->status,
            'guru_id' =>$request->guru_id
        ]);

        return redirect()->route('data.kelas.index')->with('success', 'Kelas berhasil ditambahkan');

    }

    public function edit($id)
    {
        // $kelas = (object)[
        //     'id' => $id,
        //     'nama' => 'TK A',
        //     'tahun_ajar' => '2024/2025',
        //     'waliKelas' => (object)['id' => 1, 'nama' => 'Bu Rina'],
        //     'wali_kelas_id' => 1,
        //     'status' => 'aktif',
        //     'total_murid' => 15,
        // ];

        $kelas = Kelas::find($id);

        $guru = Guru::all();

        return view('data.kelas.edit', compact('kelas', 'guru'));
    }

    public function show($id)
    {
        // $kelas = (object)[
        //     'id' => $id,
        //     'nama' => 'TK A',
        //     'tahun_ajar' => '2024/2025',
        //     'waliKelas' => (object)['nama' => 'Bu Rina'],
        //     'status' => 'aktif',
        //     'total_murid' => 15,
        // ];

        $kelas = Kelas::findOrFail($id);

        return view('data.kelas.show', compact('kelas'));
    }

    public function update(Request $request ,$id){
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'tingkat' => 'required|integer',
            'tahun_ajar' => 'required|string',
            'status' => 'required|in:aktif,non-aktif',
            'guru_id' => 'nullable',

        ]);
        $kelas = Kelas::findOrFail($id);
        $kelas->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'tingkat' => $request->tingkat,
            'tahun_ajar' => $request->tahun_ajar,
            'status' => $request->status,
            'guru_id' => $request->guru_id,

        ]);

        return redirect()->route('data.kelas.index')->with('success', 'Kelas berhasil diubah');

    }

    public function destroy($id)
    {
        Kelas::find($id)->delete();
        return redirect()->route('data.kelas.index')->with('success', 'Kelas berhasil dihapus');
    }
}