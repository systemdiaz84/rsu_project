@extends('adminlte::page')

@section('title', 'RSU Project')

@section('content_header')
    <h1>Editar especie</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-body">

            {!! Form::model($specie, ['route' => ['admin.species.update', $specie], 'method' => 'put']) !!}

            @include('admin.species.partials.form')
            {!! Form::submit('Actualizar especie', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}

        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
