<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KebaktianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //data-data kebaktian

        //1
        DB::table('kebaktians')->insert([
            'nama_ibadah'=> "Ibadah Umum Pagi - 1",
            'hari_pelaksanaan'=> "Setiap Minggu",
            'waktu_ibadah'=> "Pukul 07.00 - 08.30",
            'lokasi_kebaktian'=>"GKI Gajahmada Mojokerto",
            'foto_kebaktian'=> 'Kebaktian 2.png'
        ]);

        //2
        DB::table('kebaktians')->insert([
            'nama_ibadah'=> "Ibadah Umum Pagi - 2",
            'hari_pelaksanaan'=> "Setiap Minggu",
            'waktu_ibadah'=> "Pukul 09.00 - 10.30",
            'lokasi_kebaktian'=>"GKI Lawu Mojokerto",
            'foto_kebaktian'=> 'Kebaktian Fokus.png'
        ]);

        //3
        DB::table('kebaktians')->insert([
            'nama_ibadah'=> "Ibadah Umum Sore",
            'hari_pelaksanaan'=> "Setiap Minggu",
            'waktu_ibadah'=> "Pukul 17.00 - 18.00",
            'lokasi_kebaktian'=>"GKI Bajem Pacet", 
            'foto_kebaktian'=> 'ibadahPacet.JPG'
        ]);

        //4
        DB::table('kebaktians')->insert([
            'nama_ibadah'=> "Ibadah Komisi Pemuda Remaja",
            'hari_pelaksanaan'=> "Setiap Sabtu",
            'waktu_ibadah'=> "Pukul 17.00 - 18.30",
            'lokasi_kebaktian'=>"GKI Lawu Mojokerto", 
            'foto_kebaktian'=> 'ibadahKPR.jpg'
        ]);

        //5
        DB::table('kebaktians')->insert([
            'nama_ibadah'=> "Ibadah Komisi Anak",
            'hari_pelaksanaan'=> "Setiap Minggu",
            'waktu_ibadah'=> "Pukul 09.00 - 10.30",
            'lokasi_kebaktian'=>"GKI Gajahmada Mojokerto", 
            'foto_kebaktian'=> 'ibadahAnak.jpg'
        ]);

        //6
        DB::table('kebaktians')->insert([
            'nama_ibadah'=> "Ibadah Komisi Senior",
            'hari_pelaksanaan'=> "Setiap Sabtu (satu bulan sekali)",
            'waktu_ibadah'=> " ",
            'lokasi_kebaktian'=>"GKI Lawu Mojokerto", 
            'foto_kebaktian'=> 'ibadahLansia.JPG'
        ]);

        //7
        DB::table('kebaktians')->insert([
            'nama_ibadah'=> "Ibadah Sektor / Kelompok",
            'hari_pelaksanaan'=> "Setiap Kamis (satu bulan sekali)",
            'waktu_ibadah'=> " ",
            'lokasi_kebaktian'=>"GKI Lawu Mojokerto", 
            'foto_kebaktian'=> 'ibadahSektor.jpg'
        ]);

        //8
        DB::table('kebaktians')->insert([
            'nama_ibadah'=> "Persekutuan Doa Malam",
            'hari_pelaksanaan'=> "Setiap Senin",
            'waktu_ibadah'=> "Pukul 19.00",
            'lokasi_kebaktian'=>"GKI Lawu Mojokerto", 
            'foto_kebaktian'=> 'Kebaktian Fokus.png'
        ]);

        //9
        DB::table('kebaktians')->insert([
            'nama_ibadah'=> "Persekutuan Doa Pagi",
            'hari_pelaksanaan'=> "Setiap Selasa",
            'waktu_ibadah'=> "Pukul 06.00",
            'lokasi_kebaktian'=>"GKI Gajahmada Mojokerto", 
            'foto_kebaktian'=> 'Kebaktian Fokus.png'
        ]);
    }
}
