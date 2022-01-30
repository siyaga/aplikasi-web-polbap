<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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
    return view('home',[
        "titleWeb" => "home",
        "title" => "JURNAL ILMIAH KESEHATAN POLITEKNIK BHAKTI ASIH",
        "image" => "imgJurnal.jpg",
        "version" => "Vol 1 No 1 ",
        "description" => "Jurnal Ilmiah Kesehatan Politeknik Bhakti Asih Purwakarta adalah jurnal ilmiah yang diterbitkan oleh Lembaga Penelitian dan Pengabdian Masyarakat Politeknik Bhakti Asih Purwakarta dan sebagai sarana publikasi hasil penelitian dan pengabdian kepada masyarakat dalam bidang kesehatan. Periode penerbitan jurnal ini dilakukan pada bulan Januari dan Juli.",
        "author" => "Daris Yolanda Sari, 2022-01-24"
    ]);
});

Route::get('/jurnal', function () {
    return view('jurnal',[
        
        "titleWeb" => "jurnal",
        "title" => "JURNAL ILMIAH KESEHATAN POLITEKNIK BHAKTI ASIH",
        "image" => "imgJurnal.jpg",
        "version" => "Vol 1 No 1 ",
        "description" => "Jurnal Ilmiah Kesehatan Politeknik Bhakti Asih Purwakarta adalah jurnal ilmiah yang diterbitkan oleh Lembaga Penelitian dan Pengabdian Masyarakat Politeknik Bhakti Asih Purwakarta dan sebagai sarana publikasi hasil penelitian dan pengabdian kepada masyarakat dalam bidang kesehatan. Periode penerbitan jurnal ini dilakukan pada bulan Januari dan Juli.",
        "publish" => "2022-01-24"
    ]);
});

Route::get('/article', function () {
    return view('article');
});

Route::get('/login', function () {
    return view('login',[
        "titleWeb" => "Login"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        
        "titleWeb" => "about"
    ]);
});

Route::get('/inputJurnal', function () {
    return view('inputJurnal');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class,'index'])->middleware('guest');;
