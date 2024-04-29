<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;
use App\Http\Requests\StockRequest;
use App\Http\Resources\StockResource;

class StockController extends Controller
{

    public function index()
    {

        // $stocks = Stock::get();
        // return view('stock.index', compact('stocks'));

        $stocks = Stock::orderBy('cantidad', 'asc')
        ->paginate(10);

        
        return StockResource::collection($stocks);
    }


    public function create()
    {
        return view('stock.create');
    }

    public function store(StockRequest $request)
    {
        // $request->validate([
        //     'producto_id' => 'required|max:255',
        //     'cantidad' => 'required|numeric|min:0',
        //     'ultima_actualizacion' => 'required|date_format:Y-m-d\TH:i',
        //     'localizacion' => 'required|max:255|string',
        // ]);

        // Stock::create([
        //     'producto_id' => $request->producto_id,
        //     'cantidad' => $request->cantidad,
        //     'ultima_actualizacion' => $request->ultima_actualizacion,
        //     'localizacion' => $request->localizacion,
        // ]);

        // return redirect('stocks/create')->with('status', 'Stock añadido');

        $stock = new Stock;
        $stock->producto_id= $request->input('producto_id');
        $stock->cantidad =  $request->input('cantidad');
        $stock->ultima_actualizacion = date("Y-m-d H:i:s");
        $stock->localizacion = $request->input('localizacion');
        $stock->save();

        return response()->json($stock, 201);
    }

    


    public function show(Stock $stock)
    {

        return new StockResource($stock);

    }

    public function edit(Stock $stock, int $id)
    {
        $stock = Stock::findOrFail($id);
        return view('stock.edit', compact('stock'));
    }

    public function update(StockRequest $request, Stock $stock)
    {
        // $request->validate([
        //     'producto_id' => 'required|max:255',
        //     'cantidad' => 'required|numeric|min:0',
        //     'ultima_actualizacion' => 'required|date_format:Y-m-d\TH:i',
        //     'localizacion' => 'required|max:255|string',
        // ]);

        // Stock::findOrfail($id)->update([
        //     'producto_id' => $request->producto_id,
        //     'cantidad' => $request->cantidad,
        //     'ultima_actualizacion' => $request->ultima_actualizacion,
        //     'localizacion' => $request->localizacion,
        // ]);

        // return redirect()->back()->with('status', 'Stock actualizado');

        $stock->update($request->all());
        return response()->json($stock, 200);

    }


    public function destroy(Stock  $stock)
    {
        // $stock = Stock::findOrFail($id);
        // $stock->delete();

        // return redirect()->back()->with('status', 'Stock eliminado');

        $stock->delete();
        return response()->json(null, 204);
    }
}
