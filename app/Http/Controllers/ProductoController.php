<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductoRequest;
use App\Models\Producto;
use Illuminate\Support\Facades\File;


class ProductoController extends Controller
{

    public function index()
    {
        $productos = Producto::get();
        return view('producto.index',  compact('productos'));

    }

    public function create()
    {
        return view('producto.create');
    }


    public function store(ProductoRequest $request)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'imagen'=>'nullable|mimes:png,jpg,jpeg,webp',
            'descripcion' => 'required|max:255|string',
            'precio' => 'required|numeric|min:0.1|regex:/^\d{1,6}(\.\d{1,2})?$/',
            'categoria_id' => 'required|max:10|int',
            'estado' => 'sometimes',
            'id_proveedor' => 'required|max:10|int',
            'iva'=>'required|numeric|min:0|regex:/^\d{1,6}(\.\d{1,2})?$/',
        ]);

        if($request->has('imagen')){
            $file = $request->file('imagen');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'subidas/producto/';
            $file->move($path, $filename);
        }

        Producto::create([
            'nombre' => $request->nombre,
            'imagen' => $path.$filename,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
            'categoria_id' => $request->categoria_id,
            'estado' => $request->estado == true ? 1 : 0,
            'id_proveedor' => $request->id_proveedor,
            'iva' => $request->iva,
        ]);

        return redirect('productos/create')->with('status', 'Producto añadido');
    }

    public function show(Producto $producto)
    {
        //
    }

    public function edit(int $id)
    {
        $producto = Producto::findOrFail($id);
        return view('producto.edit', compact('producto'));
    }

    public function update(ProductoRequest $request, int $id)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'imagen'=>'nullable|mimes:png,jpg,jpeg,webp',
            'descripcion' => 'required|max:255|string',
            'precio' => 'required|numeric|min:0.1|regex:/^\d{1,6}(\.\d{1,2})?$/',
            'categoria_id' => 'required|max:10|int',
            'estado' => 'sometimes',
            'id_proveedor' => 'required|max:10|int',
            'iva'=>'required|numeric|min:0|regex:/^\d{1,6}(\.\d{1,2})?$/',
        ]);

        $producto = Producto::findOrfail($id);

        if($request->has('imagen')){
            $file = $request->file('imagen');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'subidas/producto/';
            $file->move($path, $filename);

            if(File::exists($producto->imagen)){
                File::delete($producto->imagen);
            }
        }

       $producto->update([
            'nombre' => $request->nombre,
            'imagen' => $path.$filename,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
            'categoria_id' => $request->categoria_id,
            'estado' => $request->estado == true ? 1 : 0,
            'id_proveedor' => $request->id_proveedor,
            'iva' => $request->iva,
        ]);

        return redirect()->back()->with('status', 'Producto actualizado');
    }

    // Borrar producto

    public function destroy(int $id)
    {
        $producto = Producto::findOrFail($id);
        if (File::exists($producto->imagen)) {
            File::delete($producto->imagen);
        }

        $producto->delete();

        return redirect()->back()->with('status', 'Producto eliminado');
    }
}
