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
            $table->string('kuasa_hukum_pengguggat');
            $table->string('kuasa_hukum_tergugat');
            $table->string('ruang_sidang');
            $table->string('hakim');
            $table->string('panitera');
            $table->date('tanggal_sidang');
            $table->time('waktu_sidang');
            $table->enum('status', ['menunggu', 'dipanggil', 'sukses']);
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
