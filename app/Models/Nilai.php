<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $table = 'Nilai';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'Nilai',
        'Siswa_id',
        'Mata_Pelajaran_id'
    ];

    public function siswa()
    {
        return $this->BelongsTo(Siswa::class, 'Mata_Pelajaran_id');
    }

      public function Mata_Pelajaran()
    {
        return $this->belongsTo(Mapel::class,'Siswa_id');
    }
}
