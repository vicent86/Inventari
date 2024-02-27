<x-app-web-layout>

    <x-slot name="title">
        Categorias
    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Categorias
                            <a href="{{ url('categories/create') }}" class="btn btn-primary float-end">Añadir Categoria</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-dark table-striped-columns">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Estado</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->nombre }}</td>
                                    <td>{{ $item->descripcion }}</td>
                                    <td>@if($item->estado) Activo @else Inactivo @endif</td>
                                    <td>
                                        <a href="{{ url('categories/'.$item->id.'/editar')}}" class="btn btn-success mx-2">Editar</a>
                                        
                                        <a href="{{ url('categories/'.$item->id.'/eliminar') }}" class="btn btn-danger mx-1" onclick="return confirm('¿Estás seguro de eliminar la Categoria?')">Eliminar</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-web-layout>