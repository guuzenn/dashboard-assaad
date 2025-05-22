<?php

namespace App\Models;

use App\Http\Controllers\PembayaranController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanCicilan extends Model
{
    use HasFactory;

    protected $table = 'pengajuan_cicilan';

    protected $fillable = [
        'riwayat_id',
        'user_id',
        'alasan',
        'jumlah_termin',
        'nominal',
        'status',
    ];

    public function riwayat() {
        return $this->belongsTo(RiwayatPembayaran::class, 'riwayat_id');
    }
    public function cicilan() {
        return $this->hasMany(Cicilan::class,'pengajuan_id');
    }


}