<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $fillable=[
        'nombre',
    ]; 

    public function cursos(){ // se manda a llamar en el seeder de post en la relacion
        return $this->belongsToMany(Curso::class);  //pertenece y tiene muchas etiquetas
    }
}
