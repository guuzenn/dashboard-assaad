<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('admin', function ($user) {
            return $user->role === 'admin'; // Pastikan sesuai nama kolom & nilainya
        });

        Gate::define('guru', function ($user) {
            return $user->role === 'guru'; // Pastikan sesuai nama kolom & nilainya
        });

        Gate::define('siswa', function ($user) {
            return $user->role === 'siswa'; // Pastikan sesuai nama kolom & nilainya
        });
    }
}