<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    use HasFactory;
    protected $table = "wilayah";
    protected $primarykey = "id";
    protected $fillabel = ['id','Wilayah'];

    public function Data()
    
    {
       return $this->hasMany(Wilayah::class);
    }
}
