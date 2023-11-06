<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('homepage',
        [
            "pagetitle" => "GKI Mojokerto",
            "maintitle" => "Welcome to GKI Mojokerto"
        ]
    );
});

Route::get('/kebaktian', function () {
    return view('kebaktian',
        [
            "pagetitle" => "Kebaktian",
            "maintitle" => "Daftar Kebaktian GKI Mojokerto"
        ]
    );
});

Route::get('/persembahan', function () {
    return view('persembahan',
        [
            "pagetitle" => "Persembahan",
            "maintitle" => "Daftar Persembahan GKI Mojokerto"
        ]
    );
});
