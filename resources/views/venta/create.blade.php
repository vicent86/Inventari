<x-app-web-layout>

    <x-slot name="title">
       Añadir Ventas
    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                @if(session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4> Añadir Ventas
                            <a href="{{ url('ventas') }}" class="btn btn-primary float-end">Atras</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('ventas/create') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label>Cliente_ID</label>
                                <input type="text" class="form-control" name="cliente_id" value="{{ old('cliente_id') }}" />
                                @error('cliente_id') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Precio_Total</label>
                                <input type="text" class="form-control" name="precio_total" value="{{ old('precio_total') }}" />
                                @error('precio_total') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Fecha_Venta</label>
                                <input type="date" class="from-control" name="fecha_venta" value="{{ old('fecha_venta') }}" />
                                @error('fecha_venta') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-web-layout>