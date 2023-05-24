<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekstrakulikuler extends Model
{
    use HasFactory;
    protected $table ='Ekstrakulikuler';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'Nama_Ekstrakulikuler',
        'Deskripsi'
    ];
}
