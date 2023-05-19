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
    return view('layouts.app');
});

Route::prefix('profile')->group(function () {
    Route::get('/sekolah', function () {
        return view('layouts.profil_sekolah');
    });
    Route::get('/visi-misi', function () {
        return view('layouts.visi_misi');
    });
    Route::get('/data-guru', function () {
        return view('layouts.data_guru');
    });
    Route::get('/peta', function () {
        return view('layouts.peta_sekolah');
    });
});

Route::get('/news', function () {
    return view('layouts.news');
});

Route::get('/kurikulum', function () {
    return view('layouts.kurikulum');
});

Route::get('/extrakulikuler', function () {
    return view('layouts.extrakulikuler');
});

Route::get('/sarana-prasarana', function () {
    return view('layouts.sarana_prasarana');
});

Route::get('/data-siswa', function () {
    return view('layouts.data_siswa');
});

Route::get('/ppdb', function () {
    return view('layouts.ppdb');
});

Route::get('/galeri', function () {
    return view('layouts.galeri');
});