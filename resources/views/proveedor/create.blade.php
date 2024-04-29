<x-app-web-layout>

    <x-slot name="title">
       Añadir Proveedores
    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                @if(session('status'))
                    <div class="alert alert-success">{{  session('status') }}</div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4> Añadir Clientes
                            <a href="{{ url('proveedores') }}" class="btn btn-primary float-end">Atras</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('proveedores/create') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label>Nombre</label>
                                <input type="text" class="from-control" name="nombre" value="{{ old('nombre') }}" />
                                @error('nombre') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Direccion</label>
                                <input type="text" class="from-control" name="direccion" value="{{ old('direccion') }}" />
                                @error('direccion') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" class="from-control" name="email" value="{{ old('email') }}" />
                                @error('email') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>CIF</label>
                                <input type="text" class="from-control" name="cif" value="{{ old('cif') }}" />
                                @error('cif') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Estado</label>
                                <input type="checkbox" name="estado" {{ old('estado') == true ? checked:'' }} />
                                @error('estado') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Cualificacion</label>
                                <input type="number" class="from-control" name="cualificacion" min="1" max="5" value="{{ old('cualificacion') }}" />
                                @error('cualificacion') <span class="text-danger">{{ $message }}</span>@enderror
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