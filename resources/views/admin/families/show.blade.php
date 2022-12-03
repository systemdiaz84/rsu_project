@extends('adminlte::page')

@section('title', 'RSU Project')

@section('content_header')
    <h1>Visualización de Familia</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                {!! Form::label('name', 'Nombre:') !!} <br>
                {{$family->name}}
            </div>
            <div class="form-group">
                {!! Form::label('description', 'Descripción:') !!} <br>
                {{$family->description}}
            </div>

            <a href="{{route('admin.families.edit',$family)}}" class="btn btn-primary">Editar</a>

        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
