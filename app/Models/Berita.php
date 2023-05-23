<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $table = 'berita';
    protected $primarykey = 'id';
    protected $fillable =[
        'id',
        'Judul',
        'Isi_Berita',
        'Tanggal_Publikasi',
        'Staff_id',
        'Staff_Users_id',
        'Staff_Users_Role_id'
    ];
}
