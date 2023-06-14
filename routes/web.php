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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/eceran', function () {
    return view('eceran');
});
Route::get('/grosir', function () {
    return view('grosir');
});
Route::get('/supplier', function () {
    return view('supplier');
});
Route::get('/barang', function () {
    return view('barang');
});
Route::get('/keuangan', function () {
    return view('keuangan');
});
Route::get('/pembelian', function () {
    return view('pembelian');
});
Route::get('/pelanggan', function () {
    return view('pelanggan');
});
Route::get('/kategori', function () {
    return view('kategori');
});
