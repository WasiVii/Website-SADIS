<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'Nama_Siswa',
        'Tanggal_Lahir',
        'Alamat',
        'Jenis_Kelamin',
        'Nomor_Telepon',
        'Email',
        'Tahun_Lulus',
        'Users_id',
        'Kelas_id',
        'Ekstrakulikuler_id'
    ];
}
