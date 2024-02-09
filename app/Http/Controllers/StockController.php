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


    public function destroy( Stock $stock)
    {
        $stock->delete();
        return redirect()->route('stocks.index');
    }
}
