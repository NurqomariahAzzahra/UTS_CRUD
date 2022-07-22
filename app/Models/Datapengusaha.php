<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datapengusaha extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_pengusaha', 'nama_produk',  'categori', 'alamat', 'wilayah'
    ];
}
