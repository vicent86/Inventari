<x-app-web-layout>

    <x-slot name="title">
        Venta_Detalles
    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Venta_Detalles
                            <a href="{{ url('venta_detalles/create') }}" class="btn btn-primary float-end">Añadir Venta_Detalles</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-dark table-striped-columns">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Producto_ID</th>
                                    <th>Precio_Producto</th>
                                    <th>Cantidad</th>
                                    <th>Venta_ID</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($venta_detalles as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->producto_id }}</td>
                                    <td>{{ number_format($item->precio_producto, 2) }}€</td>
                                    <td>{{ $item->cantidad }}</td>
                                    <td>{{ $item->venta_id }}</td>
                                    <td>
                                        <a href="{{ url('venta_detalles/'.$item->id.'/editar')}}" class="btn btn-success mx-2">Editar</a>
                                        
                                        <a href="{{ url('venta_detalles/'.$item->id.'/eliminar') }}" class="btn btn-danger mx-1" onclick="return confirm('¿Estás seguro de eliminar los Detalles de la Venta?')">Eliminar</a>
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