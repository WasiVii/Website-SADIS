<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index(){
         if (!Session::has('dashboard_alert')) {
            alert()->success("Selamat Datang Bapak/Ibu " . (Auth::user()->name ?? '') . "!", "Anda telah berhasil masuk sebagai " . (Auth::user()->role->name ?? '') . " 👋🎉");
            Session::put('dashboard_alert', true);
        }
       $count_siswa = DB::table('siswa')->count();
       $count_guru = DB::table('guru')->count();
       $count_kelas= DB::table('kelas')->count();
       $count_staff = DB::table('staff')->count();
       $count_berita = DB::table('berita')->count();
       $count_ekstrakulikuler = DB::table('ekstrakulikuler')->count();
       $count_sarana = DB::table('sarana')->count();

        return view('dashboard',compact('count_siswa','count_guru','count_kelas','count_staff','count_berita','count_ekstrakulikuler','count_sarana'));
    }
}
