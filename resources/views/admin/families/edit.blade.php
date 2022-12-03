@extends('adminlte::page')

@section('title', 'RSU Project')

@section('content_header')
    <h1>Editar familia</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-body">

            {!! Form::model($family, ['route' => ['admin.families.update', $family], 'method' => 'put']) !!}

            @include('admin.families.partials.form')
            {!! Form::submit('Actualizar familia', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}

        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
