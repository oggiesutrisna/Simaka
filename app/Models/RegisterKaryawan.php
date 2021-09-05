<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterKaryawan extends Model
{
    protected $fillable = [
        'nama',
        'ttl',
        'gender',
        'posisi',
        'email',
        'alamat',
        'notelp',
        'pend_terakhir',
        'filepdf',
        'bio',
        'screenshot',
        'dapatinformasi',
    ];
    use HasFactory;
}
