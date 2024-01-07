<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matakuliah extends Model
{
    public $table = 'matakuliah';
    protected $fillable = [
        'kode_matkul',
        'matakuliah',
        'sks',
    ];
    public $incrementing = false;
    public $timestamps = true;
}
