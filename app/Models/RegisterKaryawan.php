<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


// untuk setiap data bisa diisi oleh user, digunakan perintah protected $fillable di bagian model, dan data yang diisi dibentuk menjadi array agar semua data bisa diisi oleh user.

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
