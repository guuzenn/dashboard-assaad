<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'nama_lengkap',
        'tanggal_lahir',
        'tempat_lahir',
        'usia',
        'jenis_kelamin',
        'agama',
        'status_keluarga',
        'alamat',
        'riwayat_penyakit',
        'nama_ayah',
        'pekerjaan_ayah',
        'hp_ayah',
        'nama_ibu',
        'pekerjaan_ibu',
        'hp_ibu',
        // 'status_pendaftaran',
        // 'status_pembayaran',
        'kelas_id'
    ];

    public function nilai() {
        return $this->hasMany(Nilai::class, 'nilai_id');
    }
    public function laporan_harian() {
        return $this->hasMany(LaporanHarian::class, 'siswa_id');
    }
}
