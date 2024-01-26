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
        Producto::create($request->validated());
        return redirect()->route('Producto.index');
    }

    public function show(Producto $producto)
    {
        //
    }

    public function edit(Producto $producto)
    {
        return inertia('Productos/Edit', ['producto' =>$producto]);
    }

    public function update(Request $request, Producto $producto)
    {
        $producto->update($request->validated());
        return redirect()->route('productos.index');
    }

    // Borrar producto

    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index');
    }
}
