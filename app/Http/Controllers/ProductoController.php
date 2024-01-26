<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Stock;
use Inertia\Inertia;

class ProductoController extends Controller
{
    const NUMBER_OF_ITEMS_PER_PAGE = 25;
    public function index()
    {
        $productos = Producto::paginate(self::NUMBER_OF_ITEMS_PER_PAGE);
        return inertia('Productos/Index', ['productos' => $productos]);

    }

    public function create()
    {
        $categories = Categoria::all();
        $stock = Stock::all();
        return inertia('Productos/Create', ['categorias' => $categories, 'stock' => $stock]);
    }


    // public function ProductoLista(Request $request)
    // {


    //     $producto = Producto::with([
    //         'Categoria' => function ($query) {
    //             $query->select('id', 'nombre');
    //         }
    //     ])->orderBy('nombre', 'asc');

    //     $nombre = $request->nombre;

    //     if ($nombre != '') {

    //         $producto->where('nombre', 'LIKE', '%' . $nombre . '%');

    //     }

    //     if ($request->cat != '') {

    //         $producto->where('categoria_id', '=', $request->cat);

    //     }

    //     $producto = $producto->paginate(10);

    //     return $producto;
    // }

    // public function productoPorCategoria($id)
    // {

    //     $producto = Producto::where('categoria_id', '=', $id)->get();

    //     return $producto;

    // }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|unique:productos,nombre',
            'Categoria' => 'required',
        ]);

        try {

            $product = new Producto();

            $product->categoria_id = $request->categoria;
            $product->producto_nombre = $request->nombre;
            $product->descripcion = $request->descripcion;

            $product->save();

            return response()->json(['status' => 'success', 'message' => 'Producto agregado']);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Algo salió mal! Por favor, vuelva a intentarlo']);
        }
    }

    public function show(Producto $producto)
    {
        //
    }

    public function edit(Producto $producto)
    {
        return $producto;
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'Categoria' => 'required',
        ]);


        try {

            $product = Producto::find($id);
            $product->categoria_id = $request->categoria;
            $product->nombre = $request->nombre;
            $product->descripcion = $request->descripcion;

            $product->update();

            return response()->json(['status' => 'success', 'message' => 'Producto actualizado']);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Algo salió mal! Por favor, vuelva a intentarlo']);
        }
    }

    // Borrar producto

    public function destroy($id)
    {


        $product = Producto::find($id);

        $check = Stock::where('producto_id', '=', $product->id)->count();


        if ($check > 0) {

            return response()->json(['status' => 'error', 'message' => 'Primero debe eliminar las existencias del producto']);


        } else {


            try {

                $product->delete();

                return response()->json(['status' => 'success', 'message' => 'Producto eliminado']);

            } catch (\Exception $e) {

                return response()->json(['status' => 'error', 'message' => 'Algo salió mal! Por favor, vuelva a intentarlo']);
            }

        }

    }
}
