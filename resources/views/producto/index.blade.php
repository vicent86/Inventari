<x-app-web-layout>

    <x-slot name="title">
        Productos
    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Productos
                            <a href="{{ url('productos/create') }}" class="btn btn-primary float-end">Añadir Producto</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-dark table-striped-columns">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Imagen</th>
                                    <th>Descripcion</th>
                                    <th>Precio</th>
                                    <th>Categoria_ID</th>
                                    <th>Estado</th>
                                    <th>ID_Proveedor</th>
                                    <th>IVA</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($productos as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->nombre }}</td>
                                    <td>
                                        <img src="{{ asset($item->imagen) }}" style="width: 70px; height:70px;" alt="Img" />
                                    </td>
                                    <td>{{ $item->descripcion }}</td>
                                    <td>{{ $item->precio }}</td>
                                    <td>{{ $item->categoria_id }}</td>
                                    <td>@if($item->estado) Alta @else Baja @endif</td>
                                    <td>{{ $item->id_proveedor }}</td>
                                    <td>{{ $item->iva }}</td>
                                    <td>
                                        <a href="{{ url('productos/'.$item->id.'/editar')}}" class="btn btn-success mx-2">Editar</a>
                                        
                                        <a href="{{ url('productos/'.$item->id.'/eliminar') }}" class="btn btn-danger mx-1" onclick="return confirm('¿Estás seguro de eliminar el Producto?')">Eliminar</a>
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