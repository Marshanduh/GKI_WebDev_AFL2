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
        Schema::create('kebaktians', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_ibadah');
            $table->string('hari_pelaksanaan');
            $table->string('waktu_ibadah')->nullable(true);
            $table->string('lokasi_kebaktian');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kebaktians');
    }
};
