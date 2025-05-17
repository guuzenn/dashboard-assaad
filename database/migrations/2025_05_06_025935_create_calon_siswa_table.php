<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('calon_siswa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            // Data Pribadi
            $table->string('nama_lengkap');
            $table->string('nama_panggilan');
            $table->string('jenjang_kelas');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('usia');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('agama');
            $table->integer('anak_ke');
            $table->string('status_dalam_keluarga');
            $table->integer('jumlah_saudara');
            // Data Alamat
            $table->string('provinsi');
            $table->string('kabupaten_kota');
            $table->string('kecamatan');
            $table->string('desa_kelurahan');
            $table->text('alamat_lengkap');
            $table->string("latitude");
            $table->string("longitude");

            // Data Kesehatan
            $table->text('penyakit_bawaan')->nullable();
            $table->text('alergi')->nullable();
            $table->text('pengawasan_medis')->nullable();
            $table->text('cedera_serius')->nullable();

            // Data Orang Tua
            // Data Ibu
            $table->string('nama_ibu');
            $table->string('no_hp_ibu');
            $table->string('pekerjaan_ibu');
            // Data Ayah
            $table->string('nama_ayah');
            $table->string('no_hp_ayah');
            $table->string('pekerjaan_ayah');

            // Berkas
            $table->string('kk')->nullable();
            $table->string('akta_lahir')->nullable();
            $table->string('ktp_ortu')->nullable();

            $table->enum('status', ['menunggu', 'diterima', 'ditolak'])->default('menunggu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calon_siswa');
    }
};
