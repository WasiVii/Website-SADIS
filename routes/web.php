<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EkstrakulikulerController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\SaranaController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\UserManagementController;
use RealRashid\SweetAlert\Facades\Alert;

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

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

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

Route::middleware('auth')->prefix('dashboard')->group(function(){
    // PROFILE SETTING
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // WEBSITE DATA
    Route::middleware('admin')->group(function(){
        Route::resource('guru', GuruController::class);
        Route::resource('staff', StaffController::class);
        Route::resource('users', UserManagementController::class);
        Route::resource('roles', RolesController::class);
        Route::resource('permissions', PermissionsController::class);
    });

    Route::middleware('admin-staff')->group(function(){
        Route::resource('kelas', KelasController::class);
        Route::resource('mapel', MapelController::class);
        Route::resource('siswa', SiswaController::class);
        Route::resource('berita', BeritaController::class);
        Route::resource('ekstrakulikuler', EkstrakulikulerController::class);
        Route::resource('sarana', SaranaController::class);
    });

    Route::middleware('staff')->group(function(){
    });

    Route::middleware('admin-guru-siswa')->group(function(){
        Route::resource('nilai', NilaiController::class);
        Route::get('/nilai/generatePDF/{id}', [NilaiController::class, 'generatePDF'])->name('nilai.generatePDF');
    });
    Route::middleware('all-roles')->group(function(){
        Route::resource('siswa', SiswaController::class);
    });

});
require __DIR__ . '/auth.php';


Route::prefix('profile')->group(function () {
    Route::get('/sekolah', function () {
        return view('layouts.profil_sekolah');
    });
    Route::get('/visi-misi', function () {
        return view('layouts.visi_misi');
    });
    Route::get('/data-guru', [GuruController::class, 'show']);
    Route::get('/peta', [MapController::class, 'index']);
});

Route::get('/teams', function () {
    return view('layouts.teams');
});

// BERITA HOMEPAGE
Route::get('/news', [BeritaController::class, 'show']);
Route::get('/news/{id}', [BeritaController::class, 'detail']);

// EXTRAKULIKULER HOMEPAGE
Route::get('/extrakulikuler', [EkstrakulikulerController::class, 'show']);

// SARANA PRASARANA HOMEPAGE
Route::get('/sarana-prasarana', [SaranaController::class, 'show']);

// DATA SISWA HOMEPAGE
Route::get('/data-siswa', [SiswaController::class, 'show']);

Route::get('/ppdb', function () {
    return view('layouts.ppdb');
});

Route::get('/galeri', function () {
    return view('layouts.galeri');
});
