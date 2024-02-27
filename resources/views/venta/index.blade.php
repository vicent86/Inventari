<x-app-web-layout>

    <x-slot name="title">
        Ventas
    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Ventas
                            <a href="{{ url('ventas/create') }}" class="btn btn-primary float-end">Añadir Venta</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-dark table-striped-columns">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Cliente_ID</th>
                                    <th>Precio_Total</th>
                                    <th>Fecha_Venta</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ventas as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->cliente_id }}</td>
                                    <td>{{ number_format($item->precio_total, 2) }}€</td>
                                    <td>{{ date('d/m/Y', strtotime($item->fecha_venta))  }}</td>
                                    <td>
                                        <a href="{{ url('ventas/'.$item->id.'/editar')}}" class="btn btn-success mx-2">Editar</a>
                                        
                                        <a href="{{ url('ventas/'.$item->id.'/eliminar') }}" class="btn btn-danger mx-1" onclick="return confirm('¿Estás seguro de eliminar la Venta?')">Eliminar</a>
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