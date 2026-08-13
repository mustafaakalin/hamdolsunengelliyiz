<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReadmeController;

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
    return view('index');
});


Route::get('/ortopedik', function () {
    return view('orthopedic');
});
Route::get('/omurilik', function () {
    return view('spinal-cord');
});

Route::get('/gorme', function () {
    return view('vision');
});

Route::get('/isitme', function () {
    return view('hearing');
});

Route::get('/spastik', function () {
    return view('spastic');
});

Route::get('benioku/{slug}', [ReadmeController::class, 'show'])->name('readme');



Route::get('/ben', function () {
    return view('about');
});
