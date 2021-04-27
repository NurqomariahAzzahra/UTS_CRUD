<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',  'nim', 'prodi', 'jurusan', 'jurusan_id'
    ];
    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }
}
