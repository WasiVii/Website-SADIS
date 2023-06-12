<?php

namespace App\Exports;

use App\Models\siswa;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\withHeadings;

class exportSiswa implements FromCollection, withHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $user = DB::table('users')->get();
        $kelas = DB::table('kelas')->get();
        $ekstrakulikuler = DB::table('Ekstrakulikuler')->get();
        $s_siswa = Siswa::join('users','siswa.Users_id','=','users.id')
        ->join('kelas','siswa.Kelas_id','=','kelas.id')
        ->join('ekstrakulikuler','siswa.ekstrakulikuler_id','=','ekstrakulikuler.id')
        ->select('siswa.Nama_Siswa','siswa.Tanggal_Lahir','siswa.Alamat','siswa.Jenis_Kelamin','siswa.Nomor_Telepon','siswa.Tahun_Lulus','siswa.Email','users.name as user','kelas.Nama_Kelas as kelas','ekstrakulikuler.Nama_Ekstrakulikuler as ekstrakulikuler')
        ->get();
        return $s_siswa;
    }

    public function headings(): array
    {
        return ["Nama Siswa","Tanggal Lahir","Alamat","Jenis Kelamin","Nomor Telepon","Tahun Lulus","Email","Nama User","Kelas","Nama Ekstrakulikuler"];
    }
}
