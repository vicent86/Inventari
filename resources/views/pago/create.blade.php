<x-app-web-layout>

    <x-slot name="title">
       Añadir Pagos
    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                @if(session('status'))
                    <div class="alert alert-success">{{  session('status') }}</div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4> Añadir Pagos
                            <a href="{{ url('pagos') }}" class="btn btn-primary float-end">Atras</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('pagos/create') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label>ID_Venta</label>
                                <input type="text" class="from-control" name="id_venta" value="{{ old('id_venta') }}" />
                                @error('id_venta') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="importe">Importe</label>
                                <input type="text" class="from-control" name="importe" value="{{ old('importe') }}" />
                                @error('importe') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="iva">IVA</label>
                                <input type="text" class="from-control" name="iva" value="{{ old('iva') }}" />
                                @error('iva') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="total">Total</label>
                                <input type="text" class="from-control" name="total" value="{{ old('total') }}" />
                                @error('total') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Fecha_Pago</label>
                                <input type="date" class="from-control" name="fecha_pago" value="{{ old('fecha_pago') }}" />
                                @error('fecha_pago') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Metodo_Pago</label>
                                <input type="checkbox" name="metodo_pago" {{ old('metodo_pago') == true ? 'checked':'' }} />
                                @error('metodo_pago') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </form>
                        <script>
                            document.getElementById('importe').addEventListener('input', totalPago);
                            document.getElementById('iva').addEventListener('input', totalPago);
                        
                            function totalPago() {
                                var importe = parseFloat(document.getElementById('importe').value) || 0;
                                var iva = parseFloat(document.getElementById('iva').value) || 0;
                                document.getElementById('total').value = importe + (importe * iva / 100);
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-web-layout>