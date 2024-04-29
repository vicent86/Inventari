<x-app-web-layout>

    <x-slot name="title">
       Editar Clientes
    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                @if(session('status'))
                    <div class="alert alert-success">{{  session('status') }}</div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4> Editar Clientes
                            <a href="{{ url('clientes') }}" class="btn btn-primary float-end">Atras</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('clientes/'.$cliente->id.'/editar') }}" method="POST">
                            @csrf
                            @method("PUT")

                            <div class="mb-3">
                                <label>Nombre</label>
                                <input type="text" class="from-control" name="nombre" value="{{ $cliente->nombre }}" />
                                @error('nombre') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Direccion</label>
                                <input type="text" class="from-control" name="direccion" value="{{ $cliente->direccion }}" />
                                @error('direccion') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Telefono</label>
                                <input type="number" class="form-control" name="telefono"  value="{{ $cliente->telefono }}"  />
                                @error('telefono') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>CIF</label>
                                <input type="text" class="from-control" name="cif" value="{{ $cliente->cif }}" />
                                @error('cif') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Estado</label>
                                <input type="checkbox" name="estado" {{ $cliente->estado == true ? 'checked':'' }} />
                                @error('estado') <span class="text-danger">{{ $message }}</span>@enderror
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