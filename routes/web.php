<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapsContoller;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\PPDBController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\AlamatController;
use App\Http\Controllers\ComproController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\CicilanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiswaPPDBController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\SchoolVisitController;
use App\Http\Controllers\LaporanHarianController;
use App\Http\Controllers\MataPelajaranController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\StudentCicilanController;
use App\Http\Controllers\StudentProfileController;
use App\Http\Controllers\Konten\KegiatanController;
use App\Http\Controllers\Konten\VisiMisiController;
use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\StudentPembayaranController;
use App\Http\Controllers\StudentRekapNilaiController;
use App\Http\Controllers\StudentLaporanHarianController;
use App\Http\Controllers\PivotMataPelajaranKelasController;
use App\Http\Controllers\Auth\ForgotPasswordController as AuthForgotPasswordController;

// Route Prefix Landing Page
Route::get('/', function () {
    return redirect()->route('compro.beranda');
});

// Routing Auth (Login)
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Role-based dashboards Tests
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        // return 'Welcome, Admin!';
    })->name('dashboard')->middleware('role:admin');

    Route::get('/guru/dashboard', function () {
        // return 'Welcome, Guru!';
    })->name('guru.dashboard')->middleware('role:guru');

    Route::get('/student/dashboard', function () {
        // return 'Welcome, Siswa!';
    })->name('student.dashboard')->middleware('role:siswa');
});



// Route Prefix Compro
Route::prefix('compro')->name('compro.')->group(function () {
    Route::get('/beranda', function () {
        return view('compro.beranda');
    })->name('beranda');

    Route::get('/tentang', function () {
        return view('compro.tentang');
    })->name('tentang');

    Route::get('/event', [ComproController::class, 'event'])->name('event');
    Route::get('/event/{id}', [ComproController::class, 'eventDetail'])->name('event-detail');

    Route::get('/event', function () {
        return view('compro.event');
    })->name('event');

    Route::get('/compro/beranda', [ComproController::class, 'beranda'])->name('compro.beranda');

    Route::get('/kontak', function () {
        return view('compro.kontak');
    })->name('kontak');

    Route::get('/school-visit', function () {
        return view('compro.school_visit');
    })->name('school_visit');
});

Route::post('/school-visit', [SchoolVisitController::class, 'store'])->name('school-visit.store');

Route::get('/event', [ComproController::class, 'event'])->name('compro.event');
Route::get('/event/{id}', [ComproController::class, 'eventDetail'])->name('event.detail');


// Route for student registration and login
Route::get('/login-student', function () {
    return view('webppdb.auth.login');
})->name('login-student');
Route::post('/login-student', [AuthController::class, 'loginStudent'])->name('login-student.post');
Route::get('/register-student', function () {
    return view('webppdb.auth.daftar');
})->name('register-student');
Route::post('/register-student', [AuthController::class, 'registerStudent'])->name('register-student.post');

Route::get('/beranda', function () { return view('webppdb.beranda'); })->name('beranda');
Route::get('/formulir', function () { return view('webppdb.formulir'); }) ->name('formulir');
Route::post('/formulir', [SiswaPPDBController::class, 'store'])->name('formulir.store');
Route::get('/pengumuman', function () { return view('webppdb.pengumuman'); })->name('pengumuman');
Route::get('/upload_berkas', function () { return view('webppdb.upload_berkas'); })->name('upload_berkas');

Route::post( 'logoutCS', [AuthController::class, 'logoutCS'])->name('logoutCS');

Route::get('/get-kabupaten/{id}', [AlamatController::class, 'getKabupaten']);
Route::get('/get-kecamatan/{id}', [AlamatController::class, 'getKecamatan']);
Route::get('/get-desa/{id}', [AlamatController::class, 'getDesa']);


// Route for PPDB
// Route::middleware(['auth', 'role:calon siswa'])->group(function () {
//     Route::prefix('ppdbsiswa')->name('webppdb.')->group(function() {
//         Route::get('/beranda', function () { return view('webppdb.beranda'); })->name('beranda');
//         Route::get('/formulir', function () { return view('webppdb.formulir'); })->name('formulir');
//         Route::post('/formulir', [SiswaPPDBController::class, 'store'])->name('formulir.store');
//         Route::get('/pengumuman', function () { return view('webppdb.pengumuman'); })->name('pengumuman');
//         Route::get('/upload_berkas', function () { return view('webppdb.upload_berkas'); })->name('upload_berkas');
//     });
// });


Route::prefix('auth')->group(function () {
    Route::get('forgot-password', [AuthForgotPasswordController::class, 'index'])->name('auth.forgot-password');
    Route::post('forgot-password', [AuthForgotPasswordController::class, 'sendResetLink']);
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
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
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

// Pembagian Maps
Route::prefix('data/maps')->name('data.maps.')->group(function() {
        Route::get('/', [MapsContoller::class, 'index'])->name('index');
    });
});




    Route::prefix('admin')->name('admin.')->group(function() {
        // Route Akun
        Route::prefix('akun')->name('akun.')->group(function() {
            Route::get('/', [AkunController::class, 'index'])->name('index');
            Route::get('/create', [AkunController::class, 'create'])->name('create');
            Route::post('/create', [AkunController::class, 'store'])->name('store');
            Route::get('{id}', [AkunController::class, 'show'])->name('show');
            Route::get('{id}/edit', [AkunController::class, 'edit'])->name('edit');
            Route::post('{id}/edit', [AkunController::class, 'update'])->name('update');
            Route::delete('{id}', [AkunController::class, 'destroy'])->name('destroy');
            Route::post('logout', [AkunController::class, 'logout'])->name('logout');
        });

        // Route Profil
        Route::get('profil', [ProfilController::class, 'index'])->name('profile.index');
        Route::get('profil/edit', [ProfilController::class, 'edit'])->name('profile.edit');
        Route::post('profil/edit', [ProfilController::class, 'update'])->name('profile.update');
    });

 // Konten
    Route::prefix('konten')->name('konten.')->group(function () {
        // Visi Misi
        Route::resource('visi_misi', VisiMisiController::class);
        // Kegiatan
        Route::get('kegiatan', [KegiatanController::class, 'index'])->name('kegiatan.index');
        Route::get('kegiatan/create', [KegiatanController::class, 'create'])->name('kegiatan.create');
        Route::post('kegiatan', [KegiatanController::class, 'store'])->name('kegiatan.store');
        Route::get('kegiatan/{id}/edit', [KegiatanController::class, 'edit'])->name('kegiatan.edit');
        Route::put('kegiatan/{id}', [KegiatanController::class, 'update'])->name('kegiatan.update');
        Route::delete('kegiatan/{id}', [KegiatanController::class, 'destroy'])->name('kegiatan.destroy');
    });



Route::middleware(['auth', 'role:siswa'])->prefix('student')->name('student.')->group(function () {
    Route::get('/dashboard', [StudentDashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [StudentProfileController::class, 'index'])->name('profile');

    Route::prefix('laporan-harian')->name('laporan_harian.')->group(function () {
        Route::get('/', [StudentLaporanHarianController::class, 'index'])->name('index');
        Route::get('/{id}', [StudentLaporanHarianController::class, 'show'])->name('show');
    });
    Route::prefix('rekap-nilai')->name('rekap_nilai.')->group(function () {
        Route::get('/', [StudentRekapNilaiController::class, 'index'])->name('index');
        Route::get('/{id}', [StudentRekapNilaiController::class, 'show'])->name('show');
    });

    Route::prefix('pembayaran')->name('pembayaran.')->group(function () {
        Route::get('/', [StudentPembayaranController::class, 'index'])->name('index');
        Route::get('/bayar/{id}', [StudentPembayaranController::class, 'bayarPenuh'])->name('bayar.penuh');
        Route::get('/bayar-cicilan/{id}', [StudentPembayaranController::class, 'bayarCicilan'])->name('bayar.cicilan');
        Route::post('/midtrans/callback', [StudentPembayaranController::class, 'callback'])
        ->withoutMiddleware([\Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::class]);
        Route::get('/cicilan/list', action: [StudentCicilanController::class,'index'])->name('cicilan.index');
        Route::get('/cicilan/create', [StudentCicilanController::class, 'create'])->name('cicilan.create');
        Route::post('/cicilan', [StudentCicilanController::class, 'store'])->name('cicilan.store');
    });
});



// Data Nilai
Route::middleware(['auth', 'role:guru'])->group(function () {
    Route::prefix('data/nilai')->name('data.nilai.')->group(function() {
        Route::get('/', [NilaiController::class, 'index'])->name('index');
        Route::get('/{id}/list', [NilaiController::class, 'list'])->name('list');
        Route::get('/{id}/create', [NilaiController::class, 'create'])->name('create');
        Route::post('/{id}', [NilaiController::class, 'store'])->name('store');
        Route::get('/{id}', [NilaiController::class, 'show'])->name('show');
        Route::get('/{id}/edit', [NilaiController::class, 'edit'])->name('edit');
        Route::put('/{id}', [NilaiController::class, 'update'])->name('update');
        Route::delete('/{id}', [NilaiController::class, 'destroy'])->name('destroy');
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
});

    // Admin Pembayaran
    Route::prefix('admin/pembayaran')->name('pembayaran.')->group(function () {
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
            Route::post('/{id}/setujui', [CicilanController::class, 'setujui'])->name('setujui');
            Route::post('/{id}/tolak', [CicilanController::class, 'tolak'])->name('tolak');
            Route::get('/{id}/buat-cicilan', [CicilanController::class, 'create'])->name('create');
        });

        Route::get('/{tagihan}', [PembayaranController::class, 'show'])
            ->where('tagihan', '[0-9]+')
            ->name('show');
    });

    Route::prefix('student/pembayaran')->name('student.pembayaran.')->group(function () {

    });
