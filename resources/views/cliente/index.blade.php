<x-app-web-layout>

    <x-slot name="title">
        Clientes
    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Clientes
                            <a href="{{ url('clientes/create') }}" class="btn btn-primary float-end">Añadir Cliente</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-dark table-striped-columns">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Direccion</th>
                                    <th>Telefono</th>
                                    <th>CIF</th>
                                    <th>Estado</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clientes as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->nombre }}</td>
                                    <td>{{ $item->direccion }}</td>
                                    <td>{{ $item->telefono }}</td>
                                    <td>{{ $item->cif }}</td>
                                    <td>@if($item->estado) Activo @else Inactivo @endif</td>
                                    <td>
                                        <a href="{{ url('clientes/'.$item->id.'/editar')}}" class="btn btn-success mx-2">Editar</a>
                                        
                                        <a href="{{ url('clientes/'.$item->id.'/eliminar') }}" class="btn btn-danger mx-1" onclick="return confirm('¿Estás seguro de eliminar el Cliente?')">Eliminar</a>
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