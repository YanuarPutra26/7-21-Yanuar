<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

route::get('/', function () {
    return view('index', [
        "title" => "Beranda"
    ]);
});

route::get('/about',function () {
    return view('about', [
        "title" => "About",
        "nama" => "M Yanuar Putra Pradana",
        "email" => "3103120139@student.smktelkom-pwt.sch.id",
        "gambar" => "bapak.jpg"
    ]);
});

route::get('/gallery', function(){
    return view('gallery', [
        "title" => "Gallery"
    ]);
});

route::resource('/contacts', ContactController::class);
Auth::routes();

route::group(['middlewere' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
