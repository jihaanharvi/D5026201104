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
