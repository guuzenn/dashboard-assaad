<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPembayaran extends Model
{
    use HasFactory;
    protected $fillable = ['siswa_id','tagihan_id','status', 'midtrans_order_id', 'payment_url'];

    public function siswat() {
        return $this->hasMany(Siswa::class);
    }
    public function tagihan() {
        return $this->belongsTo(TagihanPembayaran::class);
    }
}