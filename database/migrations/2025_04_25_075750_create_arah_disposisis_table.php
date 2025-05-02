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
        Schema::create('arah_disposisis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('asal_jabatan_id'); // Kolom untuk ID asal jabatan
            $table->unsignedBigInteger('tujuan_jabatan_id'); // Kolom untuk ID tujuan jabatan
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('asal_jabatan_id')->references('id')->on('jabatans')->onDelete('cascade');
            $table->foreign('tujuan_jabatan_id')->references('id')->on('jabatans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arah_disposisis');
    }
};
