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
            $table->enum('durasi', ['12 Jam', '24 Jam', '36 Jam', '48 Jam', '60 Jam', '72 Jam']);
            $table->string('harga');
            $table->enum('bahan_bakar', ['Bensin', 'Diesel']);
            $table->enum('tipe', ['Matic', 'Manual']);
            $table->enum('seater', ['5 Seater', '7 Seater']);
            $table->enum('kategori', ['MPV', 'SUV']);
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
