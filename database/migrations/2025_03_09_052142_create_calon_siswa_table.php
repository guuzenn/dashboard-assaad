<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('calon_siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->integer('usia');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('status_keluarga');
            $table->text('alamat');
            $table->text('riwayat_penyakit')->nullable();
            $table->string('nama_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('hp_ayah');
            $table->string('nama_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('hp_ibu');
            $table->string('status_pendaftaran')->default('Menunggu')->nullable();
            $table->string('status_pembayaran')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('calon_siswa');
    }
};



