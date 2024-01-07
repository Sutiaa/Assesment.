<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prodi extends Model
{
    public $table = 'prodi';
    protected $primarykey = 'nim';
    protected $fillable = [
        'fakultas',
        'program_studi',
    ];
    public $incrementing = false;
    public $timestamps = true;
}
