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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id('peminjaman');
            $table->date('tanggal');
            $table->date('tanggal_selesai');
            $table->string('slot');
            $table->string('nama_kegiatan');
            $table->string('nama_penanggungJawab');
            $table->string('lapangan');
            $table->bigInteger('no_telp');
            $table->string('surat_peminjaman') -> nullable();
            $table->string('tor') -> nullable();
            $table->string('hari');
            $table->integer('status');
            $table->integer('specialStatus');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
