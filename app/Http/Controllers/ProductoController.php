<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductoRequest;
use App\Http\Resources\ProductoResource;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

    public function index()
    {

        $productos = Producto::orderBy('precio', 'asc')
            ->paginate(10);


        return ProductoResource::collection($productos);
    }

    public function create()
    {
        //
    }


    public function store(ProductoRequest $request)
    {

        $request->validate([
            'nombre' => 'required|string|max:255',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric',
            'categoria_id' => 'required|integer',
            'estado' => 'required|boolean',
            'id_proveedor' => 'required|integer',
            'iva' => 'required|numeric',
        ]);

        $producto = new Producto;

        $producto->nombre = $request->nombre;

        if ($request->hasFile('imagen')) {
            $image = $request->file('imagen');
            $path = $image->store('subidas/producto', 'public');
            $producto->imagen = $path;
        } else {
            $producto->imagen = null;
        }

        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->categoria_id = $request->categoria_id;
        $producto->estado = $request->estado;
        $producto->id_proveedor = $request->id_proveedor;
        $producto->iva = $request->iva;

        $producto->save();

        return response()->json(new ProductoResource($producto), 201);
    }

    public function show(Producto $producto)
    {
        return new ProductoResource($producto);
    }

    public function edit(int $id)
    {
        $producto = Producto::findOrFail($id);
        return view('producto.edit', compact('producto'));
    }

    public function update(Request $request, int $id)
    {
        $producto = Producto::find($id);
        if (is_null($producto)) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }

        $producto->update($request->all());
        return response()->json($producto, 200);
    }

    // Borrar producto

    public function destroy(Producto $producto)
    {

        $producto->delete();
        return response()->json(null, 204);
    }
}
