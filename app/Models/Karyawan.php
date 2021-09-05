<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $fillable = [
        'name',
        'ttl',
        'gender',
        'posisi',
        'tempat',
        'alamat',
        'notelp',
        'pend_terakhir',
    ];
    use HasFactory;
}
