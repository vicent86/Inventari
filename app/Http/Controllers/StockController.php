<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;
use App\Http\Requests\StockRequest;

class StockController extends Controller
{

    public function index()
    {

        $stocks = Stock::get();
        return view('stock.index', compact('stocks'));
    }


    public function create()
    {
        return view('stock.create');
    }

    public function store(StockRequest $request)
    {
        $request->validate([
            'producto_id' => 'required|max:255',
            'cantidad' => 'required|numeric|min:0',
            'ultima_actualizacion' => 'required|date_format:Y-m-d\TH:i',
            'localizacion' => 'required|max:255|string',
        ]);

        Stock::create([
            'producto_id' => $request->producto_id,
            'cantidad' => $request->cantidad,
            'ultima_actualizacion' => $request->ultima_actualizacion,
            'localizacion' => $request->localizacion,
        ]);

        return redirect('stocks/create')->with('status', 'Stock añadido');

    }


    public function show(Stock $stock)
    {

        //

    }

    public function edit(Stock $stock, int $id)
    {
        $stock = Stock::findOrFail($id);
        return view('stock.edit', compact('stock'));
    }

    public function update(StockRequest $request, int $id)
    {
        $request->validate([
            'producto_id' => 'required|max:255',
            'cantidad' => 'required|numeric|min:0',
            'ultima_actualizacion' => 'required|date_format:Y-m-d\TH:i',
            'localizacion' => 'required|max:255|string',
        ]);

        Stock::findOrfail($id)->update([
            'producto_id' => $request->producto_id,
            'cantidad' => $request->cantidad,
            'ultima_actualizacion' => $request->ultima_actualizacion,
            'localizacion' => $request->localizacion,
        ]);

        return redirect()->back()->with('status', 'Stock actualizado');

    }


    public function destroy(int $id)
    {
        $stock = Stock::findOrFail($id);
        $stock->delete();

        return redirect()->back()->with('status', 'Stock eliminado');
    }
}
