<div class="card">

    <div class="card-header">

        <input wire:model="search" type="text" class="form-control" placeholder="Buscar especie">

    </div>
    <div class="card-body">

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Familia</th>
                    <th>Descripción</th>
                    <th colspan="2"></th>
                </tr>
            <tbody>
                @foreach ($species as $specie)
                    <tr>
                        <td>{{$specie->id}}</td>
                        <td>{{$specie->name}}</td>
                        <td>{{$specie->family}}</td>
                        <td>{{$specie->description}}</td>
                        <td><a href="{{route('admin.species.edit',$specie)}}" class="btn btn-primary btn-sm">Editar</a></td>
                        <td><form action="{{route('admin.species.destroy',$specie)}}" method="POST">
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
        <div class="float-right"> {{ $species->links()}}</div>
       
    </div>

</div>