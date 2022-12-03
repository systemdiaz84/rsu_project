<div class="form-group">
    {!! Form::label('family', 'Familia') !!}
    {!! Form::select('family_id', $family, null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">
    {!! Form::label('name', 'Nombre de la especie') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la especie']) !!}
</div>

<div class="form-group">

    {!! Form::label('description', 'Descripción') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la descripción']) !!}
</div>
