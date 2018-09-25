<?php

namespace App;

use App\Curso;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $fillable=[
        'nombre',
    ]; 

    public function cursos()
    { 
        return $this->belongsToMany(Curso::class);  
    }
}
