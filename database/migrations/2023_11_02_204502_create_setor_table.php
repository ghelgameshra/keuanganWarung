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
        Schema::create('setor', function (Blueprint $table) {
            $table->id();
            $table->char('invno')->unique();
            $table->integer('docno')->unique();
            $table->foreignId('id_karyawan');
            $table->foreignId('jenis_setor');
            $table->foreignId('id_cabang');
            $table->integer('nominal_setor');
            $table->text('keterangan')->nullable();
            $table->string('bukti_setor')->nullable();
            $table->foreignId('approve_atasan')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('setor');
    }
};
