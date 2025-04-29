<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    //
    use HasFactory;
    protected $fillable = ['nama'];

    public function kelas()
    {
        return $this->hasMany(PivotMataPelajaranKelas::class, 'mata_pelajaran_id');
    }
}
