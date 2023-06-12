<?php

namespace App\Imports;

use App\Models\kelas;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Row;

class importKelas implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new kelas([
            'Nama_Kelas'=>$row[1],
            'Tahun_Pelajaran'=>$row[2],
            'Wali_Kelas'=>$row[3],
            'Array_siswa'=>$row[4]
        ]);
    }
}
