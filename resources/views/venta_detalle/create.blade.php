<x-app-web-layout>

    <x-slot name="title">
       Añadir Venta_Detalles
    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                @if(session('status'))
                    <div class="alert alert-success">{{  session('status') }}</div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4> Añadir Venta_Detalles
                            <a href="{{ url('venta_detalles') }}" class="btn btn-primary float-end">Atras</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('venta_detalles/create') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label>Producto_ID</label>
                                <input type="text" class="from-control" name="producto_id" value="{{ old('producto_id') }}" />
                                @error('producto_id') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Precio_Producto</label>
                                <input type="text" class="from-control" name="precio_producto" value="{{ old('precio_producto') }}" />
                                @error('precio_producto') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Cantidad</label>
                                <input type="number" class="from-control" name="cantidad" value="{{ old('cantidad') }}" />
                                @error('cantidad') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Venta_ID</label>
                                <input type="text" class="from-control" name="venta_id" value="{{ old('venta_id') }}" />
                                @error('venta_id') <span class="text-danger">{{ $message }}</span>@enderror
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