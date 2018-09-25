<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Alumno;
use App\Curso;

class FrontController extends Controller
{
    
    public function index()
    {

        //$alumnos=Alumno::findOrFail(11);
        //$alumnos=Alumno::all(); 
        
        $alumnos=Alumno::with('cursos')->get();
        
        //$alumnos->cursos;
     

       dd($alumnos);
       
        
       return view('front.index',compact('alumnos'));
    }
    
}
