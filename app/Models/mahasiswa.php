<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    public $table = 'mahasiswa';
    protected $primarykey = 'nim';
    protected $fillable = [
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'jenis_kelamin',
        'email',
    ];
    public $incrementing = false;
    public $timestamps = true;
}
