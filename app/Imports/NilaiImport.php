<?php

namespace App\Imports;

use App\Models\Nilai;
use Maatwebsite\Excel\Concerns\ToModel;

class NilaiImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Nilai([
            'Nilai'=> $row[1],
            'Siswa_id' => $row[2],
            'Mata_Pelajaran_id' => $row[3]
        ]);
    }
}
