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
        Schema::create('tambah_antrians', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->enum('nama_meja', ['Meja Inzage', 'Meja Umum', 'Meja Perdata', 'Meja Pidana', 'Meja Hukum/Pengaduan', 'Meja Pojok e-Court']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tambah_antrians');
    }
};
