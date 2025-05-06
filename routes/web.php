<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MataPelajaranController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\PivotMataPelajaranKelasController;
use App\Http\Controllers\PPDBController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Konten\VisiMisiController;
use App\Http\Controllers\Konten\KegiatanController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\CicilanController;
use App\Http\Controllers\LaporanHarianController;

// Routing Auth (Login)
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Role-based dashboards Tests
Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', function () {
        return 'Welcome, Admin!';
    })->name('admin.dashboard')->middleware('role:admin');

    Route::get('/guru/dashboard', function () {
        return 'Welcome, Guru!';
    })->name('guru.dashboard')->middleware('role:guru');

    Route::get('/siswa/dashboard', function () {
        return 'Welcome, Siswa!';
    })->name('siswa.dashboard')->middleware('role:siswa');
});

// Route Prefix PPDB
Route::prefix('ppdb')->name('ppdb.')->group(function() {
    Route::get('/', [PPDBController::class, 'index'])->name('index');
    Route::get('/create', [PPDBController::class, 'create'])->name('create');
    Route::post('/', [PPDBController::class, 'store'])->name('store');
    Route::get('/{id}', [PPDBController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [PPDBController::class, 'edit'])->name('edit');
    Route::put('/{id}', [PPDBController::class, 'update'])->name('update');   
    Route::delete('/{id}', [PPDBController::class, 'destroy'])->name('destroy'); 
});

// Data Murid
Route::prefix('data/murid')->name('data.murid.')->group(function() {
    Route::get('/', [MuridController::class, 'index'])->name('index');
    Route::get('/create', [MuridController::class, 'create'])->name('create');
    Route::post('/', [MuridController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [MuridController::class, 'edit'])->name('edit');
    Route::get('/{id}', [MuridController::class, 'show'])->name('show');
    Route::put('/{id}', [MuridController::class, 'update'])->name('update');
    Route::delete('/{id}', [MuridController::class, 'destroy'])->name('destroy');
});

// Data Guru
Route::prefix('data/guru')->name('data.guru.')->group(function() {
    Route::get('/', [GuruController::class, 'index'])->name('index');
    Route::get('/create', [GuruController::class, 'create'])->name('create');
    Route::post('/', [GuruController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [GuruController::class, 'edit'])->name('edit');
    Route::get('/{id}', [GuruController::class, 'show'])->name('show');
    Route::put('/{id}', [GuruController::class, 'update'])->name('update');
    Route::delete('/{id}', [GuruController::class, 'destroy'])->name('destroy');
});

// Data Kelas
Route::prefix('data/kelas')->name('data.kelas.')->group(function() {
    Route::get('/', [KelasController::class, 'index'])->name('index');
    Route::get('/create', [KelasController::class, 'create'])->name('create');
    Route::post('/', [KelasController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [KelasController::class, 'edit'])->name('edit');
    Route::get('/{id}', [KelasController::class, 'show'])->name('show');
    Route::put('/{id}', [KelasController::class, 'update'])->name('update');
    Route::delete('/{id}', [KelasController::class, 'destroy'])->name('destroy');
});

// Data Nilai
Route::prefix('data/nilai')->name('data.nilai.')->group(function() {
    Route::get('/', [NilaiController::class, 'index'])->name('index');
    Route::get('/create', [NilaiController::class, 'create'])->name('create');
    Route::post('/', [NilaiController::class, 'store'])->name('store');
    Route::get('/{id}', [NilaiController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [NilaiController::class, 'edit'])->name('edit');
    Route::put('/{id}', [NilaiController::class, 'update'])->name('update');
    Route::delete('/{id}', [NilaiController::class, 'destroy'])->name('destroy');
});

// Mata Pelajaran
Route::prefix('data/mapel')->name('data.mata_pelajaran.')->group(function() {
    Route::get('/', [MataPelajaranController::class, 'index'])->name('index');
    Route::get('/create', [MataPelajaranController::class, 'create'])->name('create');
    Route::post('/', [MataPelajaranController::class, 'store'])->name('store');
    Route::get('/{id}', [MataPelajaranController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [MataPelajaranController::class, 'edit'])->name('edit');
    Route::put('/{id}', [MataPelajaranController::class, 'update'])->name('update');
    Route::delete('/{id}', [MataPelajaranController::class, 'destroy'])->name('destroy');
});

// Pembagian Mapel
Route::prefix('data/pembagian_mapel')->name('data.pivot_mapel_kelas.')->group(function() {
    Route::get('/', [PivotMataPelajaranKelasController::class, 'index'])->name('index');
    Route::get('/create', [PivotMataPelajaranKelasController::class, 'create'])->name('create');
    Route::post('/', [PivotMataPelajaranKelasController::class, 'store'])->name('store');
    Route::get('/{id}', [PivotMataPelajaranKelasController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [PivotMataPelajaranKelasController::class, 'edit'])->name('edit');
    Route::put('/{id}', [PivotMataPelajaranKelasController::class, 'update'])->name('update');
    Route::delete('/{id}', [PivotMataPelajaranKelasController::class, 'destroy'])->name('destroy');
});

// Konten
Route::prefix('konten')->name('konten.')->group(function () {
    // Visi Misi
    Route::get('visi_misi', [VisiMisiController::class, 'index'])->name('visi_misi.index');
    Route::get('visi_misi/create', [VisiMisiController::class, 'create'])->name('visi_misi.create');
    Route::post('visi_misi', [VisiMisiController::class, 'store'])->name('visi_misi.store');
    Route::get('visi_misi/{id}/edit', [VisiMisiController::class, 'edit'])->name('visi_misi.edit');
    Route::put('visi_misi/{id}', [VisiMisiController::class, 'update'])->name('visi_misi.update');
    Route::delete('visi_misi/{id}', [VisiMisiController::class, 'destroy'])->name('visi_misi.destroy');

    // Kegiatan
    Route::get('kegiatan', [KegiatanController::class, 'index'])->name('kegiatan.index');
    Route::get('kegiatan/create', [KegiatanController::class, 'create'])->name('kegiatan.create');
    Route::post('kegiatan', [KegiatanController::class, 'store'])->name('kegiatan.store');
    Route::get('kegiatan/{id}/edit', [KegiatanController::class, 'edit'])->name('kegiatan.edit');
    Route::put('kegiatan/{id}', [KegiatanController::class, 'update'])->name('kegiatan.update');
    Route::delete('kegiatan/{id}', [KegiatanController::class, 'destroy'])->name('kegiatan.destroy');
});

// Admin Pembayaran
Route::prefix('admin/pembayaran')->name('admin.pembayaran.')->group(function () {
    Route::get('/', [PembayaranController::class, 'index'])->name('index');
    Route::get('/create', [PembayaranController::class, 'create'])->name('create');
    Route::post('/', [PembayaranController::class, 'store'])->name('store');
    Route::get('/{tagihan}/edit', [PembayaranController::class, 'edit'])->name('edit');
    Route::put('/{tagihan}', [PembayaranController::class, 'update'])->name('update');
    Route::delete('/{tagihan}', [PembayaranController::class, 'destroy'])->name('destroy');
    Route::get('/riwayat', [PembayaranController::class, 'riwayat'])->name('riwayat');
    
    Route::prefix('cicilan')->name('cicilan.')->group(function () {
        Route::get('/', [CicilanController::class, 'index'])->name('index');
        Route::get('/{id}', [CicilanController::class, 'show'])->name('show');
        Route::post('/{id}/approve', [CicilanController::class, 'approve'])->name('approve');
        Route::post('/{id}/reject', [CicilanController::class, 'reject'])->name('reject');
    });

    Route::get('/{tagihan}', [PembayaranController::class, 'show'])->where('tagihan', '[0-9]+')->name('show');
});

// Laporan Harian
Route::prefix('data/laporan-harian')->name('data.laporan_harian.')->group(function () {
    Route::get('/', [LaporanHarianController::class, 'index'])->name('index');
    Route::get('/create', [LaporanHarianController::class, 'create'])->name('create');
    Route::post('/', [LaporanHarianController::class, 'store'])->name('store');
    Route::get('/{id}', [LaporanHarianController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [LaporanHarianController::class, 'edit'])->name('edit');
    Route::put('/{id}', [LaporanHarianController::class, 'update'])->name('update');
    Route::delete('/{id}', [LaporanHarianController::class, 'destroy'])->name('destroy');
});