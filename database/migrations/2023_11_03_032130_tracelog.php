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
        Schema::create('tracelog', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('nik')->nullable();
            $table->string('menu');
            $table->string('aktivitas');
            $table->string('status')->nullable();
            $table->string('ip_user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tracelog');
    }
};
