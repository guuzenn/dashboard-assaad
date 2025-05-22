<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use Carbon\Carbon;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Nullable;

class GuruController extends Controller
{
    public function index()
    {
        // Dummy data
        $guru = Guru::get();
        return view('data.guru.index', compact('guru'));
    }

    public function create()
    {
        // $kelas = Kelas::all();
        return view('data.guru.create');
    }

    public function store(Request $request ){
        $validatedguru = $request->validate([
            'nama' => 'required|string|max:255',
            'tanggal_lahir' => 'nullable|date',
            'tempat_lahir' => 'nullable|string',
            'usia' => 'nullable|integer',
            'jenis_kelamin' => 'nullable|string',
            'alamat' => 'nullable',
            'no_hp'=> 'nullable',
            'foto'=> 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            // 'kelas_id'=> 'nullable',
        ]);

        $foto = $request->file('foto') ? $request->file('foto')->store('images/guru', 'public') : null;
        $validatedguru['foto'] = $foto;

        Guru::create($validatedguru);

        return redirect()->route('data.guru.index')->with('success', 'Data Guru berhasil ditambahkan');

    }

    public function edit($id)
    {
        $kelas = Kelas::all();
        $guru = Guru::findOrFail($id);

        return view('data.guru.edit', compact(['guru', 'kelas']));
    }

    public function update(Request $request ,$id){
        $request->validate([
            'nama' => 'required|string|max:255',
            'tanggal_lahir' => 'nullable|date',
            'tempat_lahir' => 'nullable|string',
            'usia' => 'nullable|integer',
            'alamat' => 'nullable',
            'no_hp'=> 'nullable',
            // 'kelas_id'=> 'nullable',
        ]);
        $guru = Guru::findOrFail($id);
        $guru->update([
            'nama' => $request->nama,
            'tanggal_lahir' => $request->tanggal_lahir,
            'tempat_lahir' => $request->tempat_lahir,
            'usia' => $request->usia,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            // 'kelas_id' => $request->kelas_id,
        ]);


        return redirect()->route('data.guru.index')->with('success', 'Data guru berhasil diubah');

    }

    public function show($id)
    {
        $guru = Guru::findOrFail($id);
        return view('data.guru.show', compact('guru'));
    }

    public function destroy($id)
    {
        Guru::find($id)->delete();
        return redirect()->route('data.guru.index')->with('success', 'Data guru berhasil dihapus');
    }

}
