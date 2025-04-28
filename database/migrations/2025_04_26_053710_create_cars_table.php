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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mobil');
            $table->string('durasi');
            $table->string('harga');
            $table->enum('bahan_bakar', ['BENSIN', 'DIESEL']);
            $table->enum('tipe', ['MATIC', 'MANUAL']);
            $table->enum('seater', ['5 SEATER', '7 SEATER']);
            $table->string('gambar_mobil');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
