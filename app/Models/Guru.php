<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'nama',
        'tanggal_lahir',
        'tempat_lahir',
        'usia',
        'jenis_kelamin',
        'alamat',
        'no_hp',
        // 'kelas_id',
    ];

    // public function kelas() {
    //     return $this->hasMany(Kelas::class, 'guru_id');
    // }
}
