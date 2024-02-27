<x-app-web-layout>

    <x-slot name="title">
       Editar Ventas
    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                @if(session('status'))
                    <div class="alert alert-success">{{  session('status') }}</div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4> Editar Ventas
                            <a href="{{ url('ventas') }}" class="btn btn-primary float-end">Atras</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('ventas/'.$venta->id.'/editar') }}" method="POST">
                            @csrf
                            @method("PUT")

                            <div class="mb-3">
                                <label>Cliente_ID</label>
                                <input type="text" class="form-control" name="cliente_id" value="{{ $venta->cliente_id }}" />
                                @error('cliente_id') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Precio_Total</label>
                                <input type="text" class="form-control" name="precio_total" value="{{ $venta->precio_total }}" />
                                @error('precio_total') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Fecha_Venta</label>
                                <input type="date" class="form-control" name="fecha_venta" value="{{ $venta->fecha_venta }}" />
                                @error('fecha_venta') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-web-layout>