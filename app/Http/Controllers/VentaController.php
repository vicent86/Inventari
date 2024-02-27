<?php

namespace App\Http\Controllers;


use App\Models\Venta;
use App\Http\Requests\VentaRequest;

class VentaController extends Controller
{
    public function index()
    {
        $ventas = Venta::get();
        return view('venta.index', compact('ventas'));

    }

    public function create()
    {
        return view('venta.create');
    }

    public function store(VentaRequest $request)
    {
        $request->validate([
            'clienta_id' => 'required|max:10|int',
            'precio_total' => 'required|numeric|min:0|regex:/^\d{1,6}(\.\d{1,2})?$/',
            'fecha_venta'=>'required|date'
        ]);

        Venta::create([
            'cliente_id' => $request->cliente_id,
            'precio_total' => $request->precio_total,
            'fecha_venta' => $request->fecha_venta,
        ]);


        return redirect('ventas/create')->with('status', 'Venta añadida');
    }

    public function show(Venta $venta)
    {
        //
    }

    public function edit(int $id)
    {
        $venta = Venta::findOrFail($id);
        return view('venta.edit', compact('venta'));
    }

    public function update(VentaRequest $request, int $id)
    {
        $request->validate([
            'clienta_id' => 'required|max:10|int',
            'precio_total' => 'required|numeric|min:0|regex:/^\d{1,6}(\.\d{1,2})?$/',
            'fecha_venta'=>'required|date'
        ]);

        Venta::findOrFail($id)->update([
            'cliente_id' => $request->cliente_id,
            'precio_total' => $request->precio_total,
            'fecha_venta' => $request->fecha_venta,
        ]);

        return redirect()->back()->with('status', 'Venta actualizada');
    }

    public function destroy(int $id)
    {
        $venta = Venta::findOrFail($id);
        $venta->delete();

        return redirect()->back()->with('status', 'Venta eliminada');
    }
}
