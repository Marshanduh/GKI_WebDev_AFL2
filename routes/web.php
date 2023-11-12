<?php

use App\Http\Controllers\KebaktianController;
use App\Http\Controllers\PersembahanController;
use App\Models\Kebaktian;
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

// Route::get('/', [KebaktianController::class, 'index']); 
Route::get('/', function () {
    return view('homepage',
        [
            "pagetitle" => "GKI Mojokerto",
            //"maintitle" => ""
        ]
    );
});
// Route::get('/kebaktian', function () {
//     return view('kebaktian',
//         [
//             "pagetitle" => "Kebaktian",
//             "maintitle" => "Daftar Kebaktian GKI Mojokerto",
            
//         ]
//     );
// });

Route::get('/kebaktian', [KebaktianController::class, 'index']) ->name('kebaktian');

Route::get('/persembahan', [PersembahanController::class, 'index']) ->name('persembahan');

// Route::get('/persembahan', function () {
//     return view('persembahan',
//         [
//             "pagetitle" => "Persembahan",
//             //"maintitle" => "Daftar Persembahan GKI Mojokerto"
//         ]
//     );
// });

Route::get('/contact_us', function () {
    return view('contact_us',
        [
            "pagetitle" => "GKI Mojokerto - Contact Us",
            //"maintitle" => "Contact Us"
        ]
    );
});

Route::get('/about_us', function () {
    return view('about_us',
        [
            "pagetitle" => "GKI Mojokerto - About Us",
            //"maintitle" => "About Us"
        ]
    );
});
