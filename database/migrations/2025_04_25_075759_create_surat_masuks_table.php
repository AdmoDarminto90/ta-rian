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
        Schema::create('surat_masuks', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_surat', 30); // Kolom untuk nomor surat
            $table->string('pengirim', 50); // Kolom untuk pengirim surat
            $table->string('perihal', 255); // Kolom untuk perihal surat
            $table->string('sifat_surat', 50)->default('Biasa'); // Kolom untuk sifat surat (default: Biasa)
            $table->date('tanggal_surat'); // Kolom untuk tanggal surat
            $table->date('tanggal_terima'); // Kolom untuk tanggal terima surat
            $table->text('keterangan')->nullable(); // Kolom untuk keterangan (opsional)
            $table->string('file_surat')->nullable(); // Kolom untuk file surat (opsional)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_masuks');
    }
};
