<?php

namespace App\Http\Controllers;

use App\Models\RiwayatPembayaran;
use App\Models\TagihanPembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentDashboardController extends Controller
{
    public function index()
    {
        $siswa = Auth::user()->siswa; // atau ambil dari parameter jika perlu

        $totalTagihan = TagihanPembayaran::where(function ($query) use ($siswa) {
            $query->where('siswa_id', $siswa->id)
                 ->orWhereNull('siswa_id');
        })->sum('nominal');

        $riwayatLunas = RiwayatPembayaran::where('siswa_id', $siswa->id)
            ->where('status', 'lunas') // hanya hitung yang sudah lunas
            ->with('tagihan') // pastikan ada relasi tagihan di model
            ->get();

        // Total pembayaran dijumlahkan dari nominal tagihan terkait
        $totalPembayaran = $riwayatLunas->sum(function ($item) {
            return $item->tagihan->nominal ?? 0;
        });

        $sisaTagihan = $totalTagihan - $totalPembayaran;
        $status = $sisaTagihan <= 0 ? 'Lunas' : 'Belum Lunas';

        return view('student.dashboard', compact('totalTagihan', 'totalPembayaran', 'status', 'sisaTagihan'));
    }
}