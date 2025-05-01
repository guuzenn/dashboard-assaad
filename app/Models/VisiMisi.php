<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisiMisi extends Model
{
    use HasFactory;

    // Nama tabel (opsional jika nama model dan tabel sesuai konvensi)
    protected $table = 'visi_misis';

    // Kolom yang boleh diisi melalui mass assignment
    protected $fillable = ['judul', 'konten'];
}