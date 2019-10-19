<?php

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

Route::get('/', 'Home@index');


//Mahasiswa
Route::get('/mahasiswa', 'Mhs@index');
Route::post('/mahasiswa', 'Mhs@store');
Route::delete('/mahasiswa/{mhsmodel}', 'Mhs@destroy');
Route::patch('/mahasiswa/{mhsmodel}', 'Mhs@update');


//Matkul
Route::get('/matkul', 'Matkul@index');