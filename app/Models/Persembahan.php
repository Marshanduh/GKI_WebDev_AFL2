<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persembahan extends Model
{
    use HasFactory; 

    private static $persembahans = [
        [
            'nama_persembahan' => 'Persembahan Bulanan', 
            'kode_persembahan' => '003', 
            'contoh_penulisan_persembahan' =>'100.002', 
        ]

    ]; 

    public static function index(){
        return self::$persembahans; 
    }



    // "nama_persembahan" => [
    //     'Persembahan Bulanan', 'Persembahan Kolekte', 
    //     'Persembahan Syukur', 'Persembahan Peralatan Multimedia', 
    //     'Persembahan Kespel'
    // ], 
    // "kode_persembahan" => [
    //     '001', '002', '003', '009', '010'
    // ], 
    // "contoh_penulisan_persembahan" => [
    //     'Rp100.001', 'Rp100.002', 'Rp100.003', 
    //     'Rp100.009', 'Rp100.010'
    // ]
}
