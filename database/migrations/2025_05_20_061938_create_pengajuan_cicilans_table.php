<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengajuan_cicilan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('riwayat_id')->constrained('riwayat_pembayaran')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->text('alasan')->nullable();
            $table->integer('jumlah_termin')->nullable();
            $table->integer('nominal');
            $table->string('status')->default('menunggu'); // menunggu, disetujui, ditolak
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuan_cicilan');
    }
};
