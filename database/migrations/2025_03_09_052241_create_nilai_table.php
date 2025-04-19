<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('nilai', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id')->constrained('siswa')->onDelete('cascade');
            $table->foreignId('guru_id')->constrained('guru')->onDelete('cascade');
            $table->integer('kelas_id');
            $table->integer('nilai');
            $table->text('deskripsi');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('nilai');
    }
};

