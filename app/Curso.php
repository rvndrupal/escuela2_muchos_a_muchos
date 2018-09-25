<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable=[
        'nombre','body',
    ]; 

    public function alumnos(){ 
        return $this->belongsToMany(Alumnos::class);  
    }
}
