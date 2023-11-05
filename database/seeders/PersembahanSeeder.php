<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersembahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //data data persembahan

        //1
        DB::table('persembahans')->insert([
            'nama_persembahan'=> "Persembahan Bulanan",
            'kode_persembahan'=> "001",
            'contoh_penulisan_persembahan'=> "Rp100.001"
        ]);

        //2
        DB::table('persembahans')->insert([
            'nama_persembahan'=> "Persembahan Kolekte",
            'kode_persembahan'=> "002",
            'contoh_penulisan_persembahan'=> "Rp100.002"
        ]);

        //3
        DB::table('persembahans')->insert([
            'nama_persembahan'=> "Persembahan Syukur/Perpuluhan",
            'kode_persembahan'=> "003",
            'contoh_penulisan_persembahan'=> "Rp100.003"
        ]);

        //4
        DB::table('persembahans')->insert([
            'nama_persembahan'=> "Persembahan Peralatan Multimedia",
            'kode_persembahan'=> "009",
            'contoh_penulisan_persembahan'=> "Rp100.009"
        ]);

        //5
        DB::table('persembahans')->insert([
            'nama_persembahan'=> "Persembahan Kespel",
            'kode_persembahan'=> "010",
            'contoh_penulisan_persembahan'=> "Rp100.010"
        ]);

    }
}
