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
        $guru1 = collect([
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
        $kelas = Kelas::all();
        return view('data.guru.create', compact('kelas'));
    }

    public function store(Request $request ){
        $request->validate([
            'nama' => 'required|string|max:255',
            'tanggal_lahir' => 'nullable|date',
            'tempat_lahir' => 'nullable|string',
            'usia' => 'nullable|integer',
            'jenis_kelamin' => 'nullable|string',
            'alamat' => 'nullable',
            'no_hp'=> 'nullable',
            'kelas_id'=> 'nullable',
        ]);

        Guru::create([
            'nama' => $request->nama,
            'tanggal_lahir' => $request->tanggal_lahir,
            'tempat_lahir' => $request->tempat_lahir,
            'usia' => $request->usia,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'kelas_id' => $request->kelas_id
        ]);

        return redirect()->route('data.guru.index')->with('success', 'Kelas berhasil ditambahkan');

    }

    public function edit($id)
    {
        // $guru = (object)[
        //     'id' => $id,
        //     'nama' => 'Ibu Rina Mulyani',
        //     'tanggal_lahir' => '1985-06-12',
        //     'tempat_lahir' => 'Bandung',
        //     'jenis_kelamin' => 'Perempuan',
        //     'kelas' => 'TK A',
        //     'alamat' => 'Jl. Kenanga No. 10, Bandung',
        //     'no_hp' => '081234567891',
        // ];
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
            'kelas_id'=> 'nullable',
        ]);
        $guru = Guru::findOrFail($id);
        $guru->update([
            'nama' => $request->nama,
            'tanggal_lahir' => $request->tanggal_lahir,
            'tempat_lahir' => $request->tempat_lahir,
            'usia' => $request->usia,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'kelas_id' => $request->kelas_id,
        ]);



        return redirect()->route('data.guru.index')->with('success', 'Kelas berhasil diubah');

    }

    public function show($id)
    {
        // $guru = (object)[
        //     'id' => $id,
        //     'nama' => 'Ibu Rina Mulyani',
        //     'tanggal_lahir' => '1985-06-12',
        //     'tempat_lahir' => 'Bandung',
        //     'jenis_kelamin' => 'Perempuan',
        //     'kelas' => 'TK A',
        //     'alamat' => 'Jl. Kenanga No. 10, Bandung',
        //     'no_hp' => '081234567891',
        // ];

        $guru = Guru::findOrFail($id);

        return view('data.guru.show', compact('guru'));
    }

    public function destroy($id)
    {
        Guru::find($id)->delete();
        return redirect()->route('data.guru.index')->with('success', 'Guru berhasil dihapus');
    }

}
