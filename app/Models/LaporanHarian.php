<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanHarian extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'tanggal',
        'kelas_id',
        'siswa_id',
        'deskripsi',
        'image',
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

}
