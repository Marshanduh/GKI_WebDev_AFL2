<?php

use App\Http\Controllers\KebaktianController;
use App\Http\Controllers\PersembahanController;
use App\Models\Kebaktian;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view(
        'homepage',
        [
            "pagetitle" => "GKI Mojokerto",
            "maintitle" => ""
        ]
    );
});

Route::get('/kebaktian', [KebaktianController::class, 'index'])->name('kebaktian');

Route::get('/persembahan', [PersembahanController::class, 'index'])->name('persembahan');

Route::get('/', [KebaktianController::class, 'homepage'])->name('kebaktian');



Route::get('/contact_us', function () {
    return view(
        'contact_us',
        [
            "pagetitle" => "GKI Mojokerto - Contact Us",
            //"maintitle" => "Contact Us"
        ]
    );
});

Route::get('/about_us', function () {
    return view(
        'about_us',
        [
            "pagetitle" => "GKI Mojokerto - About Us",
            //"maintitle" => "About Us"
        ]
    );
});