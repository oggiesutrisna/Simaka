<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posting extends Model
{
    protected $fillable = [
        'judul',
        'deskripsi',
        'tempat',
        'kategori',
        'photo',
    ];

    use HasFactory;
}
