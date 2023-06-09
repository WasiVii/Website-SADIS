<?php

namespace App\Exports;

use App\Models\mapel;
use Maatwebsite\Excel\Concerns\withHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class MapelExport implements FromCollection, withHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return mapel::all();
    }

    public function headings(): array
    {
        return ["id","Nama Mata Pelajaran","Created At","Updated At"];
    }
}
