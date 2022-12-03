@extends('adminlte::page')

@section('title', 'Familias de Árboles')

@section('content_header')

    <a href="{{ route('admin.families.create') }}" class="btn btn-secondary float-right">Agregar Familia</a>
    <h1>Familias de Árboles</h1>
@stop

@section('content')
    <div class="card">

        <div class="card-header">

        </div>
        <div class="card-body">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th colspan="2"></th>
                    </tr>
                <tbody>
                    @foreach ($families as $family)
                        <tr>
                            <td>{{$family->id}}</td>
                            <td>{{$family->name}}</td>
                            <td>{{$family->description}}</td>
                            <td><a href="{{route('admin.families.show',$family)}}" class="btn btn-primary btn-sm">Editar</a></td>
                            <td><form action="{{route('admin.families.destroy',$family)}}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </thead>
            </table>

        </div>

        <div class="card-footer ">
            <div class="float-right"> {{ $families->links()}}</div>
           
        </div>

    </div>
@stop



@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
