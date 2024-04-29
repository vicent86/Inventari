<x-app-web-layout>

    <x-slot name="title">
        Pagos
    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Pagos
                            <a href="{{ url('pagos/create') }}" class="btn btn-primary float-end">Añadir Pago</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-dark table-striped-columns">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>ID_Venta</th>
                                    <th>Importe</th>
                                    <th>IVA</th>
                                    <th>Total</th>
                                    <th>Fecha_Pago</th>
                                    <th>Metodo_Pago</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pagos as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->id_venta }}</td>
                                    <td>{{ $item->importe }}</td>
                                    <td>{{ $item->iva }}</td>
                                    <td>{{ $item->total }}</td>
                                    <td>{{ date('d/m/Y', strtotime($item->fecha_pago))  }}</td>
                                    <td>@if($item->metodo_pago) Efectivo @else Targeta @endif</td>
                                    <td>
                                        <a href="{{ url('pagos/'.$item->id.'/editar')}}" class="btn btn-success mx-2">Editar</a>
                                        
                                        <a href="{{ url('pagos/'.$item->id.'/eliminar') }}" class="btn btn-danger mx-1" onclick="return confirm('¿Estás seguro de eliminar el Pago?')">Eliminar</a>

                                        <a href="{{ url('pagos/'.$item->id.'/generate-pdf') }}" class="btn btn-primary">Imprimir</a>
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