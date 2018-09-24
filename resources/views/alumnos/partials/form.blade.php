<div class="from-group">    
    {!! Form::label('nombre','Alumno') !!}
    
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}   
    
</div>


<div class="from-group"> 
    {{ Form::label('cursos','Cursos') }}
    <div>
        @foreach ($cursos as $curso)
        <label>
          {{ Form::checkbox('cursos[]', $curso->id) }} {{ $curso->nombre }}  
        </label>            
        @endforeach
    </div>  
<div>



<div class="from-group">    
        
    {!! Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) !!}   
    
</div>