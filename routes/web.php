<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\PivotMataPelajaranKelasController;
use App\Http\Controllers\PPDBController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MataPelajaranController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\PivotMataPelajaranKelas;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KontenController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\KegiatanController;
use Illuminate\Support\Facades\Route;

// Routing Auth (Login)
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

// Test

// Route Prefix PPDB
Route::prefix('ppdb')->name('ppdb.')->group(function() {
    Route::get('/', [PPDBController::class, 'index'])->name('index');
    Route::get('/create', [PPDBController::class, 'create'])->name('create');
    Route::get('/{id}/edit', [PPDBController::class, 'edit'])->name('edit');
    Route::get('/{id}', [PPDBController::class, 'show'])->name('show');
    Route::post('/', [PPDBController::class, 'store'])->name('store');
});

// Route Prefix Data Murid
Route::prefix('data/murid')->name('data.murid.')->group(function() {
    Route::get('/', [MuridController::class, 'index'])->name('index');
    Route::get('/create', [MuridController::class, 'create'])->name('create');
    Route::post('/', [MuridController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [MuridController::class, 'edit'])->name('edit');
    Route::get('/{id}', [MuridController::class, 'show'])->name('show');
    Route::post('/',[MuridController::class,'store'])->name('store');
    Route::put('/{id}',[MuridController::class,'update'])->name('update');
    Route::delete('/{id}',[MuridController::class,'destroy'])->name('destroy');
});

// Route Prefix Data Guru
Route::prefix('data/guru')->name('data.guru.')->group(function() {
    Route::get('/', [GuruController::class, 'index'])->name('index');
    Route::get('/create', [GuruController::class, 'create'])->name('create');
    Route::get('/{id}/edit', [GuruController::class, 'edit'])->name('edit');
    Route::get('/{id}', [GuruController::class, 'show'])->name('show');
    Route::post('/',[GuruController::class,'store'])->name('store');
    Route::put('/{id}',[GuruController::class,'update'])->name('update');
    Route::delete('/{id}',[GuruController::class,'destroy'])->name('destroy');
});

// Route Prefix Data Kelas
Route::prefix('data/kelas')->name('data.kelas.')->group(function() {
    Route::get('/', [KelasController::class, 'index'])->name('index');
    Route::get('/create', [KelasController::class, 'create'])->name('create');
    Route::get('/{id}/edit', [KelasController::class, 'edit'])->name('edit');
    Route::get('/{id}', [KelasController::class, 'show'])->name('show');
    Route::post('/',[KelasController::class,'store'])->name('store');
    Route::put('/{id}',[KelasController::class,'update'])->name('update');
    Route::delete('/{id}',[KelasController::class,'destroy'])->name('destroy');

});

// Route Prefix Data Nilai
Route::prefix('data/nilai')->name('data.nilai.')->group(function() {
    Route::get('/', [NilaiController::class, 'index'])->name('index');
    Route::get('/create', [NilaiController::class, 'create'])->name('create');
    Route::get('/{id}', [NilaiController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [NilaiController::class, 'edit'])->name('edit');
    Route::post('/',[NilaiController::class,'store'])->name('store');
    Route::put('/{id}',[NilaiController::class,'update'])->name('update');
    Route::delete('/{id}',[NilaiController::class,'destroy'])->name('destroy');
});

Route::prefix('data/mapel')->name('data.mata_pelajaran.')->group(function() {
    Route::get('/', [MataPelajaranController::class, 'index'])->name('index');
    Route::get('/create', [MataPelajaranController::class, 'create'])->name('create');
    Route::get('/{id}', [MataPelajaranController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [MataPelajaranController::class, 'edit'])->name('edit');
    Route::post('/',[MataPelajaranController::class,'store'])->name('store');
    Route::put('/{id}',[MataPelajaranController::class,'update'])->name('update');
    Route::delete('/{id}',[MataPelajaranController::class,'destroy'])->name('destroy');
});

Route::prefix('data/pembagian_mapel')->name('data.pivot_mapel_kelas.')->group(function() {
    Route::get('/', [PivotMataPelajaranKelasController::class, 'index'])->name('index');
    Route::get('/create', [PivotMataPelajaranKelasController::class, 'create'])->name('create');
    Route::get('/{id}', [PivotMataPelajaranKelasController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [PivotMataPelajaranKelasController::class, 'edit'])->name('edit');
    Route::post('/',[PivotMataPelajaranKelasController::class,'store'])->name('store');
    Route::put('/{id}',[PivotMataPelajaranKelasController::class,'update'])->name('update');
    Route::delete('/{id}',[PivotMataPelajaranKelasController::class,'destroy'])->name('destroy');
});

// Route Resource Konten Website: Visi Misi dan Kegiatan
Route::prefix('data')->group(function () {
    Route::resource('visi-misi', VisiMisiController::class);
    Route::resource('kegiatan', KegiatanController::class);
});

// Route untuk Konten Website: Visi Misi & Kegiatan
Route::get('/konten/visi-misi', [KontenController::class, 'visiMisi'])->name('konten.visi_misi');
Route::get('/konten/kegiatan', [KontenController::class, 'kegiatan'])->name('konten.kegiatan');