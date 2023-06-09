<?php

namespace App\Exports;

use App\Models\staff;
use Maatwebsite\Excel\Concerns\withHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class StaffExport implements FromCollection, withHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $staff = Staff::join('users','staff.users_id', '=','users.id')
        ->select('staff.id','staff.Staffcol','staff.divisi','users.name as user')
        ->get();
        return $staff;
    }
    public function headings(): array
    {
        return ["id","Nama Staff","Divisi","Nama User"];
    }
}
