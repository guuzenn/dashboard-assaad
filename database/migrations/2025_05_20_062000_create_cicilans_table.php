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
        Schema::create('cicilan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('riwayat_id')->constrained('riwayat_pembayaran')->onDelete('cascade');
            $table->foreignId('pengajuan_id')->constrained('pengajuan_cicilan')->onDelete('cascade');
            $table->date('tanggal_tempo')->nullable();
            $table->date('tanggal_bayar')->nullable();
            $table->string('metode')->nullable();
            $table->string('midtrans_order_id')->nullable();
            $table->integer('nominal');
            $table->string('status')->default('belum lunas'); // menunggu, disetujui, ditolak
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cicilan');
    }
};
