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
        Schema::create('persembahans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_persembahan');
            $table->string('kode_persembahan');
            $table->string('contoh_penulisan_persembahan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persembahans');
    }
};
