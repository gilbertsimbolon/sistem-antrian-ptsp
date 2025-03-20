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
        Schema::create('meja_pidanas', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_perkara');
            $table->string('nama_penggugat');
            $table->string('nama_tergugat');
            $table->string('kuasa_hukum_penggugat');
            $table->string('kuasa_hukum_tergugat');
            $table->string('ruang_sidang');
            $table->string('hakim');
            $table->string('panitera');
            $table->date('tanggal_sidang');
            $table->time('sidang_mulai');
            $table->time('sidang_akhir');
            $table->enum('status', ['menunggu', 'dipanggil', 'sukses']);
            $table->enum('hadir_hakim', ['hadir', 'tidak_hadir'])->default('tidak_hadir');
            $table->enum('hadir_penggugat', ['hadir', 'tidak_hadir'])->default('tidak_hadir');
            $table->enum('hadir_tergugat', ['hadir', 'tidak_hadir'])->default('tidak_hadir');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meja_pidanas');
    }
};
