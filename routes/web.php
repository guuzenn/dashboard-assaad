<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\PPDBController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\NilaiController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::view('/login', 'auth.login')->name('login');


// Route Prefix PPDB
Route::prefix('ppdb')->name('ppdb.')->group(function() {
    Route::get('/', [PPDBController::class, 'index'])->name('index');
    Route::get('/create', [PPDBController::class, 'create'])->name('create');
    Route::get('/{id}/edit', [PPDBController::class, 'edit'])->name('edit');
    Route::get('/{id}', [PPDBController::class, 'show'])->name('show');
});

// Route Prefix Data Murid
Route::prefix('data/murid')->name('data.murid.')->group(function() {
    Route::get('/', [MuridController::class, 'index'])->name('index');
    Route::get('/create', [MuridController::class, 'create'])->name('create');
    Route::post('/', [MuridController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [MuridController::class, 'edit'])->name('edit');
    Route::get('/{id}', [MuridController::class, 'show'])->name('show');
});

// Route Prefix Data Guru
Route::prefix('data/guru')->name('data.guru.')->group(function() {
    Route::get('/', [GuruController::class, 'index'])->name('index');
    Route::get('/create', [GuruController::class, 'create'])->name('create');
    Route::get('/{id}/edit', [GuruController::class, 'edit'])->name('edit');
    Route::get('/{id}', [GuruController::class, 'show'])->name('show');
});

// Route Prefix Data Kelas
Route::prefix('data/kelas')->name('data.kelas.')->group(function() {
    Route::get('/', [KelasController::class, 'index'])->name('index');
    Route::get('/create', [KelasController::class, 'create'])->name('create');
    Route::get('/{id}/edit', [KelasController::class, 'edit'])->name('edit');
    Route::get('/{id}', [KelasController::class, 'show'])->name('show');
});

// Route Prefix Data Nilai
Route::prefix('data/nilai')->name('data.nilai.')->group(function() {
    Route::get('/', [NilaiController::class, 'index'])->name('index');
    Route::get('/create', [NilaiController::class, 'create'])->name('create');
    Route::get('/{id}', [NilaiController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [NilaiController::class, 'edit'])->name('edit');
});


