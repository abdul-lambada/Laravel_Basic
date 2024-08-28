<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// Contoh Route Pertama
Route::get('helo', function () {
    return "Selamat Datang di Laravel";
});

// Contoh ROute dengan View
Route::get('blog', function () {
    return view('blog');
});

// Route dengan Controller
ROute::get('dosen', 'App\Http\Controllers\DosenController@index');
