<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kebaktian extends Model
{
    use HasFactory;

    protected $fillable = 
    ['nama_ibadah', 'hari_pelaksanaan', 'waktu_ibadah', 'lokasi_kebaktian'];
}
