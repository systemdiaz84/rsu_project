@extends('adminlte::page')

@section('title', 'Especies de Árboles')

@section('content_header')

    <a href="{{ route('admin.species.create') }}" class="btn btn-secondary float-right">Agregar Especie</a>
    <h1>Especies de Árboles</h1>
@stop

@section('content')
    @livewire('admin.species-index')
@stop



@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
