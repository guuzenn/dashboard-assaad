<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cicilan extends Model
{
    use HasFactory;

    protected $table = 'cicilan';
    protected $fillable =[
        'riwayat_id',
        'pengajuan_id',
        'tanggal_tempo',
        'tanggal_bayar',
        'metode',
        'nominal',
        'status',
    ];

     public function riwayat() {
        return $this->belongsTo(RiwayatPembayaran::class, 'riwayat_id');
    }
     public function pengajuan() {
        return $this->belongsTo(PengajuanCicilan::class, 'pengajuan_id');
    }
}
