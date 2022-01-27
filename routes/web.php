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

//Route::get('/', function () {
  //  return view('welcome');
//});

route::get('about',function () {
    return view('about', [
        "nama" => "M Yanuar Putra Pradana",
        "email" => "3103120139@student.smktelkom-pwt.sch.id",
        "gambar" => "bapak.jpg"
    ]);
});


route::get('', function(){
    return view('home');
});
route::get('gallery', function(){
    return view('gallery');
});