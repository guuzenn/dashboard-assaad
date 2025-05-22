<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    //
    use HasFactory;

    protected $table = 'nilai';

    protected $fillable = [
        'siswa_id',
        'kelas_id',
        'semester',
        'mata_pelajaran_id',
        'nilai',
        'deskripsi',
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
    public function mata_pelajaran()
    {
        return $this->belongsTo(MataPelajaran::class);
    }

}
