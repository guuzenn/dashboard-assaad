<?php

namespace App\Http\Controllers;

use App\Helpers\GeocodeHelper;
use App\Models\Kelas;
use App\Models\Siswa;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MuridController extends Controller
{
    public function index()
    {
        $murid = Siswa::get();
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
            'status_keluarga'=>'nullable',
            'kelas_id'=>'nullable',
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
            'status_keluarga' => $request->status_keluarga,
            'kelas_id' => $request->kelas_id,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,

        ]);

        return redirect()->route('data.murid.index')->with('success', 'Murid berhasil ditambahkan');

    }

    public function edit($id)
    {
        // Dummy data
        $murid = Siswa::findOrFail($id);
        $kelas = Kelas::all();
        return view('data.murid.edit', compact('murid','kelas'));
    }

     public function update(Request $request,$id)
    {
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
            'status_keluarga'=>'nullable',
            'kelas_id'=>'nullable'
        ]);

        $murid = Siswa::findOrFail($id);

        $murid->update([
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
            'kelas_id' => $request->kelas_id,
        ]);

           return redirect()->route('data.murid.index')->with('success', 'Murid berhasil diperbaharui');
    }
    public function show($id)
    {
        $murid = Siswa::findOrFail($id);
        return view('data.murid.show', compact('murid'));
    }

    public function destroy($id){
        $murid = Siswa::findOrFail($id)->delete();
        return redirect()->route('data.murid.index')->with('success', 'Murid berhasil dihapus');
    }



}
