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
        Schema::create('laporan', function (Blueprint $table) {
            $table->increments('id');
            $table->char('id_laporan')->unique();
            $table->string('nik');
            $table->char('kode_toko', 6);
            $table->integer('shift');
            $table->integer('input_aktual_kas');
            $table->integer('tabungan');
            $table->integer('aktual_kas');
            $table->char('approved', 1)->nullable()->default('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan');
    }
};
