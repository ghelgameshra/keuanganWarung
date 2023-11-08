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
        Schema::create('web_app', function (Blueprint $table) {
            $table->id();
            $table->string('appname')->default('Web App Monitoring Keuangan');
            $table->string('code_name');
            $table->integer('major_version');
            $table->integer('minor_version');
            $table->integer('patch_version');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('web_app');
    }
};
