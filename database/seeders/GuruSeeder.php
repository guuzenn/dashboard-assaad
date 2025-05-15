<?php

namespace Database\Seeders;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $kelasList = Kelas::all(); // ambil semua kelas

        foreach ($kelasList as $index => $kelas) {
            // 1. Buat User untuk Guru
            $user =User::factory()->create([
                'name' => "guru".($index+1),
                'email' => "guru".($index+1)."@example.com",
                'password' => Hash::make('gurupassword'), // default password
                'role' => 'guru', // sesuaikan jika pakai role
            ]);

            // 2. Buat Guru
            $guru = Guru::create([
                'nama' => "Guru {$kelas->nama}",
                'tanggal_lahir' => '1980-01-01',
                'tempat_lahir' => 'Jakarta',
                'usia' => 45,
                'jenis_kelamin' => 'Laki-laki',
                'alamat' => "Jl. Pendidikan No.". ($index+1),
                'no_hp' => "08123456700".($index+1),
                'user_id' => $user->id,
            ]);

            // 3. Update guru_id pada kelas tersebut
            $kelas->update(['guru_id' => $guru->id]);
        }
    }
}