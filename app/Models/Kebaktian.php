<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kebaktian extends Model
{
    use HasFactory;

    protected $fillable = 
    ['nama_ibadah','hari_pelaksanaan','waktu_ibadah', 'lokasi_kebaktian'];

    //SAMAKAN DENGAN YANG ADA DI MIGRATION
    // Schema::create('kebaktians', function (Blueprint $table) {
    //     $table->id();
    //     $table->timestamps();
    //     $table->string('nama_ibadah');
    //     $table->string('hari_pelaksanaan');
    //     $table->string('waktu_ibadah')->nullable(true);
    //     $table->string('lokasi_kebaktian');
    // });
}
