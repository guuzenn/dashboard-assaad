<?php

namespace App\Http\Controllers;

use App\Models\PengajuanCicilan;
use App\Models\RiwayatPembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentCicilanController extends Controller
{
    public function index()
    {
        // $cicilan = [
        //     [
        //         'id' => 1,
        //         'jenis_tagihan' => 'SPP April 2024',
        //         'nominal' => 500000,
        //         'jumlah_termin' => 2,
        //         'catatan' => 'Minta termin 2 bulan',
        //         'status' => 'Disetujui',
        //     ],
        //     [
        //         'id' => 2,
        //         'jenis_tagihan' => 'SPP Mei 2024',
        //         'nominal' => 500000,
        //         'jumlah_termin' => 3,
        //         'catatan' => 'Orang tua baru ganti pekerjaan',
        //         'status' => 'Menunggu',
        //     ],
        //     [
        //         'id' => 3,
        //         'jenis_tagihan' => 'Daftar Ulang 2024',
        //         'nominal' => 1000000,
        //         'jumlah_termin' => 4,
        //         'catatan' => 'Perlu cicilan panjang',
        //         'status' => 'Ditolak',
        //     ],
        // ];
        $cicilan = PengajuanCicilan::get();
        return view('student.pembayaran.cicilan', compact('cicilan'));
    }

    public function create()
    {
        $user= Auth::user()->siswa;
        $jenisTagihan = RiwayatPembayaran::where('siswa_id', $user->id)->where('status','unpaid')->get();
        return view('student.pembayaran.create_cicilan', compact('jenisTagihan'));
    }

    public function store(Request $request)
    {
            $user= Auth::user()->id;
            $request->validate([
                'riwayat_id' => 'required',
                'alasan' => 'nullable|string',
                'jumlah_termin' => 'nullable|integer',
                'nominal' => 'nullable|integer'
        ]);

        PengajuanCicilan::create([
            'riwayat_id' => $request->riwayat_id,
            'user_id' => $user,
            'alasan' => $request->alasan,
            'jumlah_termin' => $request->jumlah_termin,
            'nominal' => $request->nominal,
            'status' => 'menunggu'
        ]);

        return redirect()->route('student.pembayaran.cicilan.index')->with('success', 'Pengajuan cicilan berhasil diajukan.');
    }
    public function show(Request $request)
    {
        dd('store dipanggil');
    }
    public function destroy(Request $request,$id)
    {
        PengajuanCicilan::findOrFail($id)->delete();
        return redirect()->route('student.pembayaran.cicilan')->with('success', 'Data guru berhasil diubah');
    }


}
