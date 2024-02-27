<x-app-web-layout>

    <x-slot name="title">
       Editar Venta_Detalles
    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                @if(session('status'))
                    <div class="alert alert-success">{{  session('status') }}</div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4> Editar Venta_Detalles
                            <a href="{{ url('venta_detalles') }}" class="btn btn-primary float-end">Atras</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('venta_detalles/'.$venta_detalle->id.'/editar') }}" method="POST">
                            @csrf
                            @method("PUT")

                            <div class="mb-3">
                                <label>Producto_ID</label>
                                <input type="text" class="from-control" name="producto_id" value="{{ $venta_detalle->producto_id }}" />
                                @error('producto_id') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Precio_Producto</label>
                                <input type="text" class="from-control" name="precio_producto" value="{{ $venta_detalle->precio_producto }}" />
                                @error('precio_producto') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Cantidad</label>
                                <input type="number" class="form-control" name="cantidad" value="{{ $venta_detalle->cantidad }}" />
                                @error('cantidad') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Venta_ID</label>
                                <input type="text" class="form-control" name="venta_id"  value="{{ $venta_detalle->venta_id }}"  />
                                @error('venta_id') <span class="text-danger">{{ $message }}</span>@enderror
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