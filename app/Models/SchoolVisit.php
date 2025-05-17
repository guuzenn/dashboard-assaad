<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolVisit extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_calon_peserta',
        'ttl_calon_peserta',
        'nama_panggilan_calon_peserta',
        'nama_wali_murid',
        'alamat_domisili',
        'no_telepon_wali_murid',
        'kelas',
        'jenjang',
    ];
}
