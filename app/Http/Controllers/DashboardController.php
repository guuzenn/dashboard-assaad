<?php

namespace App\Http\Controllers;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\CalonSiswa;
use App\Models\Siswa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $statistik = [
            'totalMurid'      => Siswa::count(),
            'totalGuru'       => Guru::count(),
            'totalPendaftar'  => CalonSiswa::count(),
            'totalDiterima'   => CalonSiswa::where('status', 'diterima')->count(),
            'totalVerifikasi' => CalonSiswa::where('status', 'menunggu')->count(),
            'totalDitolak'    => CalonSiswa::where('status', 'ditolak')->count(),
            'totalKelas'      => Kelas::count(),
        ];

        return view('dashboard.index', compact('statistik'));
    }
}
