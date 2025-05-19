<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up() {
        Schema::create('school_visits', function (Blueprint $table) {
            $table->id();
            $table->string('nama_calon_peserta');
            $table->string('ttl_calon_peserta');
            $table->string('nama_panggilan_calon_peserta');
            $table->string('nama_wali_murid');
            $table->text('alamat_domisili');
            $table->string('no_telepon_wali_murid');
            $table->string('kelas');
            $table->string('jenjang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_visits');
    }
};
