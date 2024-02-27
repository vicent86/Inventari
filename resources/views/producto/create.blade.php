<x-app-web-layout>

    <x-slot name="title">
       Añadir Producto
    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                @if(session('status'))
                    <div class="alert alert-success">{{  session('status') }}</div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4> Añadir Productos
                            <a href="{{ url('productos') }}" class="btn btn-primary float-end">Atras</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('productos/create') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label>Nombre</label>
                                <input type="text" class="from-control" name="nombre" value="{{ old('nombre') }}" />
                                @error('nombre') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Subir Archivo/Imagen</label>
                                <input type="file" name="imagen" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label>Descripcion</label>
                                <textarea name="descripcion" class="from-control" rows="3">{{ old('descripcion') }}</textarea>
                                @error('descripcion') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Precio</label>
                                <input type="text" class="from-control" name="precio" value="{{ old('precio') }}" />
                                @error('precio') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Categoria_ID</label>
                                <input type="text" class="from-control" name="categoria_id" value="{{ old('categoria_id') }}" />
                                @error('categoria_id') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Estado</label>
                                <input type="checkbox" name="estado" {{ old('estado') == true ? 'checked':'' }} />
                                @error('estado') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>ID_Proveedor</label>
                                <input type="text" class="from-control" name="id_proveedor" value="{{ old('id_proveedor') }}" />
                                @error('id_proveedor') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>IVA</label>
                                <input type="text" class="from-control" name="iva" value="{{ old('iva') }}" />
                                @error('iva') <span class="text-danger">{{ $message }}</span>@enderror
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