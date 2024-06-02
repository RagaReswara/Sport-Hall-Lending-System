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
        Schema::create('forms', function (Blueprint $table) {
            $table->id('id_form');
            $table->string('nama_organisasi');
            $table->bigInteger('no_telp');
            $table->string('kat_kegiatan');
            $table->string('lapangan');
            $table->string('nama_kegiatan');
            $table->string('surat_peminjaman') -> nullable();
            $table->string('tor') -> nullable();
            $table->date('tanggal');
            $table->string('hari');
            $table->string('slot');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
