<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    public $table = 'dosen';
    protected $fillable = [
        'nip',
        'nama',
        'alamat',
        'email',
    ];
    public $incrementing = false;
    public $timestamps = true;
}
