<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_produk',  'gambar', 'kategori', 'harga', 'deskripsi'
    ];
    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }
}
