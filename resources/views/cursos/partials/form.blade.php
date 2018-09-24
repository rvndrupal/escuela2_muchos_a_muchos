<div class="from-group">    
    {!! Form::label('nombre','Curso') !!}
    
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}   
    
</div>

<div class="from-group">    
    {!! Form::label('body','Descripción') !!}
    
    {!! Form::text('body', null, ['class' => 'form-control']) !!}   
    
</div>



<div class="from-group">    
        
    {!! Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) !!}   
    
</div>