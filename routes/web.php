<?php

use App\Http\Controllers\BangunanController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\GedungController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MutasiController;
use App\Http\Controllers\TanahController;
use Illuminate\Support\Facades\Auth;
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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('/gedung', 'GedungControllerh');

Route::resource('/bangunan', 'BangunanController');

Route::resource('/kategori', KategoriController::class)->middleware('auth');

Route::resource('/barang', 'BarangController');

Route::resource('/tanah', 'TanahController');

Route::resource('/mutasi', 'MutasiController');


