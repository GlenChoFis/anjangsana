<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MountainController;
use App\Http\Controllers\gunungController;
use App\Http\Controllers\perizinanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/menuutama', function () {
    return view('menuutama');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/histori', function () {
    return view('histori');
});

Route::get('/welcome', function () {
    return view('welcome');
});

// Route::get('/perizinan', function () {
//     return view('perizinan');
// });

Route::get('/status', function () {
    return view('status');
});

Route::get('/login', function () {
    return view('login');
});


Route::get('/registrasi', function () {
    return view('registrasi');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/adminupdateberita', function () {
    return view('adminupdateberita');
});

Route::get('/adminupdatestatus', function () {
    return view('adminupdatestatus');
});

Route::get('/cek', function () {
    return view('cek');
});

Route::get('/profil', function () {
    return view('profil');
});

// Route::resource('perizinan', mountainController::class);
// Route::get('/perizinan', [mountainController::class, "index"]);

// Route::resource('perizinan', gunungController::class);
Route::get('/perizinan', [gunungController::class, 'index']);
route::post('/createizin',[perizinanController::class, 'store']);
