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

Route::get('bagian_arum', 'App\Http\Controllers\BagianController@index');
Route::get('barang_arum', 'App\Http\Controllers\BarangController@index');
Route::get('pengeluaran_arum', 'App\Http\Controllers\PengeluaranController@index');
Route::get('pengeluaranitem_arum', 'App\Http\Controllers\PengeluaranItemController@index');
Route::get('petugas_arum', 'App\Http\Controllers\PetugasController@index');