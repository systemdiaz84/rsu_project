<div class="card">

    <div class="card-header">

        <input wire:model="search" type="text" class="form-control" placeholder="Buscar familia">

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
                        <td><button class="btn btn-danger btn-sm deletebtn" id={{$family->id}}>Eliminar</button></td>
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