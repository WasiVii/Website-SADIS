<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
       $count_siswa = DB::table('siswa')->count();
       $count_guru = DB::table('guru')->count();
       $count_kelas= DB::table('kelas')->count();
       $count_staff = DB::table('staff')->count();
        return view('dashboard',compact('count_siswa','count_guru','count_kelas','count_staff'));
    }
}
