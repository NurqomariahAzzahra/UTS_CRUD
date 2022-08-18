<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restoran extends Model
{
    use HasFactory;
    protected $table = "restorans";
    protected $fillable = ['user_id','profil_resto','nama', 'alamat'];

    public function menu()
    {
        return $this->hasMany(Menu::class); 
    }
}
