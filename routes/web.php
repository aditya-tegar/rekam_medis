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
    return redirect('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/blank-page', function () {
    return view('adminlte.blank');
})->name('blank-page');

Route::get('/crud', function () {
    return view('adminlte.crud.index');
})->name('crud');

Route::get('/crud/create', function () {
    return view('adminlte.crud.create');
})->name('crud.create');

Route::get('/crud/edit', function () {
    return view('adminlte.crud.edit');
})->name('crud.edit');

//pasien
Route::resource('pasien', 'PasienController');

//farmasi
Route::resource('farmasi', 'FarmasiController');

//dokter
Route::resource('dokter', 'DokterController');

//perawat
Route::resource('perawat', 'PerawatController');

//perawat
Route::resource('jadwal', 'JadwalController');

//user
Route::resource('user', 'UserController');

//Laporan
Route::get('laporan', 'PasienController@laporan')->name('laporan');