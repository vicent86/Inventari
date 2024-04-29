<x-app-web-layout>

    <x-slot name="title">
       Editar Productos
    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                @if(session('status'))
                    <div class="alert alert-success">{{  session('status') }}</div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4> Editar Productos
                            <a href="{{ url('productos') }}" class="btn btn-primary float-end">Atras</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('productos/'.$producto->id.'/editar') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")

                            <div class="mb-3">
                                <label>Nombre</label>
                                <input type="text" class="from-control" name="nombre" value="{{ $producto->nombre }}" />
                                @error('nombre') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Subir Archivo/Imagen</label>
                                <input type="file" name="imagen" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label>Descripcion</label>
                                <textarea name="descripcion" class="from-control" rows="3">{{ $producto->descripcion }}</textarea>
                                @error('descripcion') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Precio</label>
                                <input type="text" class="from-control" name="precio" value="{{ $producto->precio }}" />
                                @error('precio') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Categoria_ID</label>
                                <input type="text" class="from-control" name="categoria_id" value="{{ $producto->categoria_id }}" />
                                @error('categoria_id') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Estado</label>
                                <input type="checkbox" name="estado" {{ $producto->estado == true ? 'checked':'' }} />
                                @error('estado') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>ID_Proveedor</label>
                                <input type="text" class="from-control" name="id_proveedor" value="{{ $producto->id_proveedor }}" />
                                @error('id_proveedor') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>IVA</label>
                                <input type="text" class="from-control" name="iva" value="{{ $producto->iva }}" />
                                @error('iva') <span class="text-danger">{{ $message }}</span>@enderror
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