<?php

namespace App\Http\Controllers;

use App\Alumno;
use App\Curso;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos=alumno::orderBy('id','DESC')->paginate(5);

        return view('alumnos.index', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cursos=Curso::orderBy('id','DESC')->get();

        //dd($cursos);

        return view('alumnos.create',compact('cursos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alumno=Alumno::create($request->all());       
     

         //relacion del post y los tags primero esto y luego la redirecccion pendejo
         $alumno->cursos()->attach($request->get('cursos')); //la magia de muchos a muchos
         //super importante para que se inserte los valores en los dos registros

         return redirect()->route('alumnos.index')
         ->with('info','Alumno guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        return view('alumnos.show', compact('alumno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumno $alumno)
    {
        $cursos=Curso::orderBy('id','DESC')->get();
        return view('alumnos.edit', compact('alumno','cursos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno $alumno)
    {
        $alumno->update($request->all());

        //relacion del post y los tags primero esto y luego la redirecccion pendejo
        $alumno->cursos()->sync($request->get('cursos')); //la magia de muchos a muchos
        //super importante para que se inserte los valores en los dos registros


        return redirect()->route('alumnos.index')
        ->with('info','Alumno actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return back()->with('info','Eliminado Correctamente');
    }
}
