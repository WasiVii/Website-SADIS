<?php

namespace App\Imports;

use App\Models\siswa;
use Maatwebsite\Excel\Concerns\ToModel;

class importSiswa implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new siswa([
            'Nama_Siswa'=>$row[1],
            'Tanggal_lahir'=>$row[2],
            'Alamat'=>$row[3],
            'Jenis_Kelamin'=>$row[4],
            'Nomor_Telepon'=>$row[5],
            'Email'=>$row[6],
            'Tahun_Lulus'=>$row[7],
            'Users_id'=>$row[8],
            'Kelas_id'=>$row[9],
            'Ekstrakulikuler_id'=>$row[10]
        ]);
    }
}
