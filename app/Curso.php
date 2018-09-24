<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable=[
        'nombre','body',
    ]; 

    public function alumnos(){ // se manda a llamar en el seeder de post en la relacion
        return $this->belongsToMany(Alumno::class);  //pertenece y tiene muchas etiquetas
    }
}
