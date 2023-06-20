<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

   public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }

}
