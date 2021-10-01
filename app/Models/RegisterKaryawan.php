<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterKaryawan extends Model
{
    protected $fillable = [
        'nama',
        'ttl',
        'waktu',
        'gender',
        'posisi',
        'email',
        'alamat',
        'notelp',
        'pend_terakhir',
        'filepdf',
        'bio',
        'jadwal',
        'diterima',
        'tempat',
        'screenshot',
        'dapatinformasi',
        'fotodiri',
        'alasan',
        'salary',
    ];
    use HasFactory;
}
