<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'nama',
        'deskripsi',
        'tingkat',
        'tahun_ajar',
        'status',
        'guru_id',
    ];

    public function guru()
    {
        // return $this->hasMany(Guru::class, 'kelas_id');
        return $this->belongsTo(Guru::class);
    }

    // public function siswa()
    // {
    //     return $this->hasMany(Siswa::class, 'kelas_id');
    // }
}