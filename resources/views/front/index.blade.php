@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Alumnos
                    @can('alumnos.create')
                    <a href="{{ route('alumnos.create') }}" class="btn btn-sm btn-primary pull-right">Nuevo Alumno</a>
                    @endcan
                </div>

                <div class="panel-body">
                 

                   @foreach ($alumnos as  $alumno )

                   Alumno:  {{ $alumno->nombre }}
                   <hr>
                  
                     Curso: {{ $alumno->cursos['nombre'] }} --> {{ $alumno->cursos['body'] }}<br> 

                   @endforeach                 
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection