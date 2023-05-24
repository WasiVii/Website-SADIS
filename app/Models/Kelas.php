<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $table = 'kelas';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'Nama_Kelas',
        'Tahun_Pelajaran',
        'Wali_Kelas',
        'Array_Siswa'
    ];
}
