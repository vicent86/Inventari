<x-app-web-layout>

    <x-slot name="title">
       Editar Proveedores
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
                            <a href="{{ url('proveedores') }}" class="btn btn-primary float-end">Atras</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('proveedores/'.$proveedor->id.'/editar') }}" method="POST">
                            @csrf
                            @method("PUT")

                            <div class="mb-3">
                                <label>Nombre</label>
                                <input type="text" class="from-control" name="nombre" value="{{ $proveedor->nombre }}" />
                                @error('nombre') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Direccion</label>
                                <input type="text" class="from-control" name="direccion" value="{{ $proveedor->direccion }}" />
                                @error('direccion') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email"  value="{{ $proveedor->email }}"  />
                                @error('email') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>CIF</label>
                                <input type="text" class="from-control" name="cif" value="{{ $proveedor->cif }}" />
                                @error('cif') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Estado</label>
                                <input type="checkbox" name="estado" {{ $proveedor->estado == true ? 'checked':'' }} />
                                @error('estado') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Cualificacion</label>
                                <input type="number" class="from-control" name="cualificacion" min="1" max="5" value="{{ $proveedor->cualificacion }}" />
                                @error('cualificacion') <span class="text-danger">{{ $message }}</span>@enderror
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