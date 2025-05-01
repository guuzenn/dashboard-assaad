<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin' . '@example.com',
            'password' => Hash::make('adminpassword'),
            'role' => 'admin',
        ]);

        User::factory()->create([
            'name' => 'Guru User',
            'email' => 'guru' . '@example.com',
            'password' => Hash::make('gurupassword'),
            'role' => 'guru',
        ]);

        User::factory()->create([
            'name' => 'Siswa User',
            'email' => 'siswa' . '@example.com',
            'password' => Hash::make('siswapassword'),
            'role' => 'siswa',
        ]);
    }
}
