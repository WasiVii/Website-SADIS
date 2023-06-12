<?php

namespace App\Exports;

use App\Models\kelas;
use Maatwebsite\Excel\Concerns\withHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class exportKelas implements FromCollection, withHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return kelas::all();
    }

    public function headings(): array
    {
        return ["id","Nama Kelas","Tahun Pelajaran ","Wali Kelas","Jumlah Siswa"];
    }
}
