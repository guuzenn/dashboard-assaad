<?php

namespace App\Http\Controllers;

use illuminate\support\Facades\Auth;
use App\Models\CalonSiswa;
use Illuminate\Http\Request;

class SiswaPPDBController extends Controller
{
    public function beranda()
    {
        return view('webppdb.beranda');
    }

    public function formulir()
    {
        return view('webppdb.formulir');
    }

    public function pengumuman()
    {
        return view('webppdb.pengumuman');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            // Data Pribadi
            'nama_lengkap' => 'required|string|max:255',
            'nama_panggilan' => 'required|string|max:255',
            'jenjang_kelas' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'usia' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'agama' => 'required|string|max:255',
            'anak_ke' => 'required|integer|min:1',
            'status_dalam_keluarga' => 'required|string|max:255',
            'jumlah_saudara' => 'required|integer|min:0',
            // Data Alamat
            'provinsi' => 'required|string|max:255',
            'kabupaten_kota' => 'required|string|max:255',
            'kecamatan' => 'required|string|max:255',
            'desa_kelurahan' => 'required|string|max:255',
            'alamat_lengkap' => 'required|string|max:255',
            'latitude' => 'required|string|max:255',
            'longitude' => 'required|string|max:255',
            // Berkas
            'kk' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'akta_lahir' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'ktp_ortu' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
            // Data Kesehatan
            'penyakit_bawaan' => 'nullable|string',
            'alergi' => 'nullable|string',
            'pengawasan_medis' => 'nullable|string',
            'cedera_serius' => 'nullable|string',
            // Data Orang Tua
            'nama_ibu' => 'required|string|max:255',
            'no_hp_ibu' => 'required|string|max:15',
            'pekerjaan_ibu' => 'required|string|max:255',
            'nama_ayah' => 'required|string|max:255',
            'no_hp_ayah' => 'required|string|max:15',
            'pekerjaan_ayah' => 'required|string|max:255',
        ]);

        // Create a new CalonSiswa record
        CalonSiswa::create([
            // Data Pribadi
            'user_id' => Auth::id(), // Assuming the user is authenticated
            'nama_lengkap' => $validated['nama_lengkap'],
            'nama_panggilan' => $validated['nama_panggilan'],
            'jenjang_kelas' => $validated['jenjang_kelas'],
            'tempat_lahir' => $validated['tempat_lahir'],
            'tanggal_lahir' => $validated['tanggal_lahir'],
            'usia' => $validated['usia'],
            'jenis_kelamin' => $validated['jenis_kelamin'],
            'agama' => $validated['agama'],
            'anak_ke' => $validated['anak_ke'],
            'status_dalam_keluarga' => $validated['status_dalam_keluarga'],
            'jumlah_saudara' => $validated['jumlah_saudara'],
            // Data Alamat
            'provinsi' => $validated['provinsi'],
            'kabupaten_kota' => $validated['kabupaten_kota'],
            'kecamatan' => $validated['kecamatan'],
            'desa_kelurahan' => $validated['desa_kelurahan'],
            'alamat_lengkap' => $validated['alamat_lengkap'],
            'latitude' => $request->input('latitude'),
            'longitude' => $request->input('longitude'),
            // Berkas
            'kk' => $request->file('kk') ? $request->file('kk')->store('images/berkas') : null,
            'akta_lahir' => $request->file('akta_lahir') ? $request->file('akta_lahir')->store('images/berkas') : null,
            'ktp_ortu' => $request->file('ktp_ortu') ? $request->file('ktp_ortu')->store('images/berkas') : null,
            // Data Kesehatan
            'penyakit_bawaan' => $validated['penyakit_bawaan'],
            'alergi' => $validated['alergi'],
            'pengawasan_medis' => $validated['pengawasan_medis'],
            'cedera_serius' => $validated['cedera_serius'],
            // Data Orang Tua
            'nama_ibu' => $validated['nama_ibu'],
            'no_hp_ibu' => $validated['no_hp_ibu'],
            'pekerjaan_ibu' => $validated['pekerjaan_ibu'],
            'nama_ayah' => $validated['nama_ayah'],
            'no_hp_ayah' => $validated['no_hp_ayah'],
            'pekerjaan_ayah' => $validated['pekerjaan_ayah'],
            'status' => 'menunggu', // Default status
        ]);

        // Redirect to a success page or back to the form
        return redirect()->route('webppdb.pengumuman')->with('success', 'Formulir berhasil disimpan!');
    }
}
