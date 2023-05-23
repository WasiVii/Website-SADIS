<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MapController;

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
    return view('layouts.home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// useless routes
// Just to demo sidebar dropdown links active states.
Route::get('/buttons/text', function () {
    return view('buttons-showcase.text');
})->middleware(['auth'])->name('buttons.text');

Route::get('/buttons/icon', function () {
    return view('buttons-showcase.icon');
})->middleware(['auth'])->name('buttons.icon');

Route::get('/buttons/text-icon', function () {
    return view('buttons-showcase.text-icon');
})->middleware(['auth'])->name('buttons.text-icon');

require __DIR__ . '/auth.php';


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
    Route::get('/peta', [MapController::class, 'index']);
});

Route::get('/teams', function () {
    return view('layouts.teams');
});

Route::get('/news', function () {
    return view('layouts.news');
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
