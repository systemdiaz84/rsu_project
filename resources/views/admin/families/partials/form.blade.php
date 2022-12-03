<div class="form-group">
    {!! Form::label("name", "Nombre de la familia") !!}
    {!! Form::text("name", null, ["class"=>"form-control","placeholder"=>"Ingrese el nombre de la familia"]) !!}
</div>

<div class="form-group">
                       
    {!! Form::label("description", "Descripción") !!}
    {!! Form::textarea("description", null, ["class"=>"form-control","placeholder"=>"Ingrese la descripción"]) !!}
</div>