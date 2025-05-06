<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalonSiswa extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'calon_siswa';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'nama_lengkap',
        'tempat_lahir',
        'tanggal_lahir',
        'nama_panggilan',
        'jenis_kelamin',
        'kewarganegaraan',
        'golongan_darah',
        'agama',
        'anak_ke',
        'provinsi',
        'kabupaten_kota',
        'kecamatan',
        'desa_kelurahan',
        'alamat_lengkap',
        'nama_ayah',
        'tempat_lahir_ayah',
        'tanggal_lahir_ayah',
        'agama_ayah',
        'pekerjaan_ayah',
        'nama_ibu',
        'tempat_lahir_ibu',
        'tanggal_lahir_ibu',
        'agama_ibu',
        'pekerjaan_ibu',
        'p_provinsi',
        'p_kabupaten_kota',
        'p_kecamatan',
        'p_desa_kelurahan',
        'p_alamat_lengkap',
        'alergi',
        'riwayat_penyakit',
        'status',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'tanggal_lahir' => 'date',
        'tanggal_lahir_ayah' => 'date',
        'tanggal_lahir_ibu' => 'date',
    ];

    /**
     * Get the user associated with the calon siswa.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
