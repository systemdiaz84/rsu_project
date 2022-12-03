@extends('adminlte::page')

@section('title', 'RSU Project')

@section('content_header')
    <h1>Crear familia</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-body">

            {!! Form::open(['route' => 'admin.families.store']) !!}


            @include('admin.families.partials.form')
            {!! Form::submit('Registrar familia', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}

        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
