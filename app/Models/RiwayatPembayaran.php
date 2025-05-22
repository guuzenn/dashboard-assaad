<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPembayaran extends Model
{
    use HasFactory;

    protected $table = 'riwayat_pembayaran';
    protected $fillable = ['siswa_id','tagihan_id','status', 'tanggal_bayar','midtrans_order_id', 'metode'];

    public function siswa() {
        return $this->belongsTo(Siswa::class);
    }
    public function tagihan() {
        return $this->belongsTo(TagihanPembayaran::class);
    }
    public function pengajuan_cicilan(){
        return $this->hasMany(PengajuanCicilan::class);
    }
    public function cicilan(){
        return $this->hasMany(Cicilan::class, 'riwayat_id');
    }
}
