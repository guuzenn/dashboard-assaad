<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagihanPembayaran extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'jenis_pembayaran',
        'nominal',
        'tanggal_tempo',
        'siswa_id',
        'status_tagihan',
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    public function riwayat() {
        return $this->belongsTo(RiwayatPembayaran::class);
    }
}