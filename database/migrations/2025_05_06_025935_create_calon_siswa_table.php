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
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('nama_panggilan');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('kewarganegaraan')->default('Indonesia');
            $table->string('golongan_darah')->nullable();
            $table->string('agama');
            $table->integer('anak_ke');
            // Data Alamat
            $table->string('provinsi');
            $table->string('kabupaten_kota');
            $table->string('kecamatan');
            $table->string('desa_kelurahan');
            $table->text('alamat_lengkap');

            // Data orang tua
            // Data Ayah
            $table->string('nama_ayah');
            $table->string('tempat_lahir_ayah');
            $table->date('tanggal_lahir_ayah');
            $table->string('agama_ayah');
            $table->string('pekerjaan_ayah');
            // Data Ibu
            $table->string('nama_ibu');
            $table->string('tempat_lahir_ibu');
            $table->date('tanggal_lahir_ibu');
            $table->string('agama_ibu');
            $table->string('pekerjaan_ibu');
            // Data Alamat
            $table->string('p_provinsi');
            $table->string('p_kabupaten_kota');
            $table->string('p_kecamatan');
            $table->string('p_desa_kelurahan');
            $table->text('p_alamat_lengkap');

            // Data tambahan
            $table->text('alergi')->nullable();
            $table->text('riwayat_penyakit')->nullable();

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
