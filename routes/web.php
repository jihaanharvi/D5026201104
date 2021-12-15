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

Route::get('/', function () {
    return view('welcome');
});

Route::get('tugas_javascript', function(){
    return view('tugas4js');
});
//silahkan buat route untuk file blade (praktikum 2)
Route::get('praktikum2', function(){
    return view('prak2');
});

//melalui controller
Route::get('ets2021',"ViewController@showETS") ;

Route::get('tugas_php',"ViewController@showPHP") ;
Route::post('hasil',"ViewController@Hasil") ;

//route CRUD pegawai
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/detail/{id}','PegawaiController@view');

//route CRUD mutasi
Route::get('/mutasi','MutasiController@index');
Route::get('/mutasi/tambah','MutasiController@tambah');
Route::post('/mutasi/store','MutasiController@store');
Route::get('/mutasi/edit/{id}','MutasiController@edit');
Route::post('/mutasi/update','MutasiController@update');
Route::get('/mutasi/hapus/{id}','MutasiController@hapus');

//route CRUD absen
Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');

Route::get('ceria', function(){
    return view('layout.ceria');
});

//route CRUD masker
Route::get('/masker','MaskerController@index');
Route::get('/masker/tambah','MaskerController@tambah');
Route::post('/masker/store','MaskerController@store');
Route::get('/masker/edit/{id}','MaskerController@edit');
Route::post('/masker/update','MaskerController@update');
Route::get('/masker/hapus/{id}','MaskerController@hapus');
Route::get('/masker/cari','MaskerController@cari');
Route::get('/masker/detail/{id}','MaskerController@view');

//route CRUD karyawan
Route::get('/karyawan1','Karyawan1Controller@index');
Route::get('/karyawan1/tambah','Karyawan1Controller@tambah');
Route::post('/karyawan1/store','Karyawan1Controller@store');
Route::get('/karyawan1/hapus/{id}','Karyawan1Controller@hapus');
