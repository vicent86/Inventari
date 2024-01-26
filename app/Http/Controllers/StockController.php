<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Models\Stock;

class StockController extends Controller
{
    const NUMBER_OF_ITEMS_PER_PAGE = 25;
    public function index()
    {
       
        $stocks = Stock::paginate(self::NUMBER_OF_ITEMS_PER_PAGE);
        return inertia('Stocks/Index', ['stocks' => $stocks]);
    }


    // public function StockList(Request $request)
    // {

    //     $stock = Stock::with(
    //         [
    //             'producto' => function ($query) {
    //                 $query->select('id', 'nombre');
    //             },
    //             'Proveedor' => function ($query) {
    //                 $query->select('id', 'nombre');
    //             },

    //             'Categoria' => function ($query) {

    //                 $query->select('id', 'nombre');
    //             }
    //         ]
    //     )
    //         ->orderBy('updated_at', 'desc');


    //     if ($request->categoria != '') {

    //         $stock->where('categoria_id', '=', $request->categoria);

    //     }

    //     if ($request->producto != '') {

    //         $stock->where('producto_id', '=', $request->producto);

    //     }

    //     if ($request->proveedor != '') {

    //         $stock->where('proveedor_id', '=', $request->proveedor);

    //     }

    //     $stock = $stock->paginate(10);

    //     return $stock;

    // }

    // public function StockListaCan($id)
    // {

    //     $chalan = Stock::where('producto_id', '=', $id)
    //         ->where('cantidad_actual', '>', 0)
    //         ->orderBy('updated_at', 'desc')
    //         ->get();


    //     return $chalan;

    // }

    public function create()
    {
        $productos = Producto::all();
        return inertia('Stocks/Create', ['productos' => $productos ]);
    }

    public function store(Request $request)
    {
        Stock::create($request->validated());
        return redirect()->route('Stock.index');
    }


    public function show(Stock $stock)
    {

       //

    }

    public function edit($stock)
    {
        return inertia('Stocks/Edit', ['stocks' =>$stock]);
    }

    public function update(Request $request, Stock $stock)
    {

        $stock->update($request->validated());
        return redirect()->route('stocks.index');
    }

    // public function StockUpdate(Request $request)
    // {

    //     $request->validate([

    //         'new_qty' => 'required|integer',
    //         'state' => 'required',
    //     ]);

    //     $stock = Stock::find($request->id);

    //     if ($request->state == '+') {

    //         $stock->current_quantity = $stock->current_quantity + $request->new_qty;
    //         $stock->stock_quantity = $stock->stock_quantity + $request->new_qty;

    //         $stock->update();

    //         return response()->json(['status' => 'success', 'message' => 'Cantidad actualizada']);
    //     } else {

    //         if ($request->new_qty > $stock->current_quantity) {

    //             return response()->json(['status' => 'error', 'message' => 'La cantidad es mayor que la cantidad actual']);

    //         } else {

    //             $stock->current_quantity = $stock->current_quantity - $request->new_qty;
    //             $stock->stock_quantity = $stock->stock_quantity - $request->new_qty;

    //             $stock->update();

    //             return response()->json(['status' => 'success', 'message' => 'Cantidad actualizada']);

    //         }


    //     }
    // }


    public function destroy( Stock $stock)
    {
        $stock->delete();
        return redirect()->route('stocks.index');
    }
}
