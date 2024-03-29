<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'nama_produk',  'gambar', 'wilayah_id', 'harga', 'deskripsi'
    ];

}
