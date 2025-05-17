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
        'nama_panggilan',
        'jenjang_kelas',
        'tempat_lahir',
        'tanggal_lahir',
        'usia_per_juli_2024',
        'jenis_kelamin',
        'agama',
        'anak_ke',
        'status_dalam_keluarga',
        'jumlah_saudara',
        'provinsi',
        'kabupaten_kota',
        'kecamatan',
        'desa_kelurahan',
        'alamat_lengkap',
        'latitude',
        'longitude',
        'kk',
        'akta_lahir',
        'ktp_ortu',
        'penyakit_bawaan',
        'alergi',
        'pengawasan_medis',
        'cedera_serius',
        'nama_ibu',
        'no_hp_ibu',
        'pekerjaan_ibu',
        'nama_ayah',
        'no_hp_ayah',
        'pekerjaan_ayah',
        'status',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'tanggal_lahir' => 'date',
    ];

    /**
     * Get the user associated with the calon siswa.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
