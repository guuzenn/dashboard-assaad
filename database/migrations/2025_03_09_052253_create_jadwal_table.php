<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('lokasi_aktivitas');
            $table->date('tanggal_aktivitas');
            $table->time('waktu_mulai');
            $table->time('waktu_selesai');
            $table->string('image')->nullable();
            $table->morphs('pembuat'); // Menyimpan id dan tipe (guru atau admin_sekolah) - gak pake foreign key
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('jadwal');
    }
};


