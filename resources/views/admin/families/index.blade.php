@extends('adminlte::page')

@section('title', 'Familias de Árboles')

@section('content_header')

    <a href="{{ route('admin.families.create') }}" class="btn btn-secondary float-right">Agregar Familia</a>
    <h1>Familias de Árboles</h1>
@stop

@section('content')

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registro de Familias</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ¿Seguro de eliminar?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                    {!! Form::open(['method' => 'DELETE', 'id' => 'frmdelete']) !!}
                    {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>

    @livewire('admin.families-index')
@stop



@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

    <script>
        $(document).ready(function() {

            $(document).on('click', '.deletebtn', function() {

                var specie_id = $(this).attr('id');

                var ruta = "{{ route('admin.families.destroy', 'specie_id') }}";
                ruta = ruta.replace('specie_id', specie_id);
                $('#frmdelete').attr('action', ruta);
                $('#exampleModal').modal('show');
            });

        });

    </script>

@endsection
