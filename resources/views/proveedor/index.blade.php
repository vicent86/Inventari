<x-app-web-layout>

    <x-slot name="title">
     Proveedores
    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Proveedores
                            <a href="{{ url('proveedores/create') }}" class="btn btn-primary float-end">Añadir Proveedor</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-dark table-striped-columns">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Direccion</th>
                                    <th>Email</th>
                                    <th>CIF</th>
                                    <th>Estado</th>
                                    <th>Cualificacion</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($proveedores as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->nombre }}</td>
                                    <td>{{ $item->direccion }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->cif }}</td>
                                    <td>@if($item->estado) Activo @else Inactivo @endif</td>
                                    <td>
                                        {{ $item->cualificacion }}
                                        @for ($i = 0; $i < $item->cualificacion; $i++)
                                        &#9733; 
                                        @endfor
                                    </td>

                                    <td>
                                        <a href="{{ url('proveedores/'.$item->id.'/editar')}}" class="btn btn-success mx-2">Editar</a>
                                        
                                        <a href="{{ url('proveedores/'.$item->id.'/eliminar') }}" class="btn btn-danger mx-1" onclick="return confirm('¿Estás seguro de eliminar el Proveedor?')">Eliminar</a>
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