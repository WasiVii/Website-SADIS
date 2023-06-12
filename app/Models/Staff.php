<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $table = 'staff';
    protected $primarykey = 'id';
    protected $fillable= [
        'id',
        'Staffcol',
        'Divisi',
        'Users_id'
    ];
}
