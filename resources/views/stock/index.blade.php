<x-app-web-layout>

    <x-slot name="title">
        Stocks
    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Stocks
                            <a href="{{ url('stocks/create') }}" class="btn btn-primary float-end">Añadir Stock</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-dark table-striped-columns">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Producto_ID</th>
                                    <th>Cantidad</th>
                                    <th>Ultima_Actualizacion</th>
                                    <th>Localizacion</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($stocks as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->producto_id }}</td>
                                    <td>{{ $item->cantidad }}</td>
                                    <td>{{ date('Y-m-d H:i:s', strtotime($item->ultima_actualizacion)) }}</td>
                                    <td>{{ $item->localizacion }}</td>
                                    <td>
                                        <a href="{{ url('stocks/'.$item->id.'/editar')}}" class="btn btn-success mx-2">Editar</a>
                                        
                                        <a href="{{ url('stocks/'.$item->id.'/eliminar') }}" class="btn btn-danger mx-1" onclick="return confirm('¿Estás seguro de eliminar el Stock?')">Eliminar</a>
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