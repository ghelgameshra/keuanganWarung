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
        Schema::create('absensi', function (Blueprint $table) {
            $table->id();
            $table->char('toko');
            $table->string('nik');
            $table->string('kode_absen');
            $table->foreignId('id_karyawan');
            $table->integer('docno');
            $table->boolean('terlambat');
            $table->time('jam_datang')->default(now());
            $table->time('jam_pulang')->nullable();
            $table->foreignId('jenis_absen');
            $table->string('bukti_absen')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absensi');
    }
};
