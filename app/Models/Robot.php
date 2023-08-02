<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Robot extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function employee(){
        return $this->belongsTo(Employee::class);
    }
    public function modele(){
        return $this->belongsTo(Modele::class);
    }
}
