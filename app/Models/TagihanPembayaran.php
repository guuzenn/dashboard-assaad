<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagihanPembayaran extends Model
{
    //
    use HasFactory;
    protected $table = 'tagihan_pembayaran';
    protected $fillable = [
        'judul',
        'nominal',
        'tanggal_tempo',
        'siswa_id',
        'deskripsi',
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    public function riwayat() {
        return $this->belongsTo(RiwayatPembayaran::class);
    }
}
