<?php

namespace App\Imports;

use App\Models\mapel;
use Maatwebsite\Excel\Concerns\ToModel;

class MapelImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new mapel([
            'Nama_Mata_Pelajaran'=> $row[1]
        ]);
    }
}
