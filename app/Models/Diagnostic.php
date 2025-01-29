<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnostic extends Model
{
    use HasFactory;

    protected $table = 'diagnostic';

    protected $fillable = [
        'nama',
        'umur',
        'alamat',
        'jenis_kelamin',
        'hasil_diagnosa',
    ];
}
