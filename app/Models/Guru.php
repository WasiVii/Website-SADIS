<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $table = 'Guru';
    protected $primarykey= 'id';
    protected $fillable =  [
        'id',
        'Nama_Guru',
        'Mata_Pelajaran',
        'Jenis_Kelamin',
        'Alamat',
        'Nomor_Telpon',
        'Image',
        'User_id',
        'Kelas_id',
        'Mata_Pelajaran_id'
    ];
}