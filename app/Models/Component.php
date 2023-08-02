<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function modeles(){
        return this->belongsToMany(Modele::class);
    }
    
}
