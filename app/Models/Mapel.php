<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;
    protected $table ='mata_pelajaran';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'Nama_Mata_Pelajaran'
    ];

}
