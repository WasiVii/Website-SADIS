<?php

namespace App\Exports;

use App\Models\Nilai;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\withHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class NilaiExport implements FromCollection, withHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
         $s_nilai = Nilai::join('siswa','nilai.siswa_id','=','siswa.id')
        ->join('mata_pelajaran','nilai.mata_pelajaran_id','=','mata_pelajaran.id')
        ->select('Nilai.id','Nilai.Nilai','siswa.Nama_Siswa as siswa','mata_pelajaran.Nama_Mata_Pelajaran as mapel',
        'Nilai.created_at','Nilai.updated_at')
        ->get();
        return $s_nilai;
    }

    public function headings(): array
    {
        return ["id","Nilai","Nama Siswa","Mata Pelajaran","Tanggal Buat","Tanggal Update"];
    }
}
