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
        'Jenis_Kelamin',
        'Alamat',
        'Nomor_Telpon',
        'Image',
        'User_id',
        'Kelas_id',
        'Mata_Pelajaran_id'
    ];

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'Wali_Kelas', 'Nama_Guru');
    }
}
