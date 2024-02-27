<x-app-web-layout>

    <x-slot name="title">
       Añadir Stocks
    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                @if(session('status'))
                    <div class="alert alert-success">{{  session('status') }}</div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4> Añadir Stocks
                            <a href="{{ url('stocks') }}" class="btn btn-primary float-end">Atras</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('stocks/create') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label>Producto_ID</label>
                                <input type="text" class="from-control" name="producto_id" value="{{ old('producto_id') }}" />
                                @error('producto_id') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Cantidad</label>
                                <input type="numeric" class="from-control" name="cantidad" value="{{ old('cantidad') }}" />
                                @error('cantidad') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="ultima_actualizacion">Ultima_Actualizacion</label>
                                <input type="datetime-local" class="from-control" name="ultima_actualizacion" value="{{ old('ultima_actualizacion') }}" />
                                @error('ultima_actualizacion') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Localizacion</label>
                                <input type="text" class="from-control" name="localizacion" value="{{ old('localizacion') }}" />
                                @error('localizacion') <span class="text-danger">{{ $message }}</span>@enderror
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