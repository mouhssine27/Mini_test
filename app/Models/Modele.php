<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modele extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function robots(){
        return $this->hasMany(Robot::class);
    }
    public function components(){
        return this->belongsToMany(Component::class);
    }
}
