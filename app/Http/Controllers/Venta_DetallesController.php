<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Venta_Detalles;
use App\Http\Requests\VentaDetallesRequest;

class Venta_DetallesController extends Controller
{

    public function index()
    {
        $venta_detalles = Venta_Detalles::get();
        return view('venta_detalle.index', compact('venta_detalles'));

    }

    public function create()
    {
        return view('venta_detalle.create');
    }

    public function store(VentaDetallesRequest $request)
    {
        $request->validate([
            'producto_id' => 'required|max:255',
            'precio_producto' => 'required|numeric',
            'cantidad' => 'required|numeric|min:0',
            'venta_id' => 'required|max:255'
        ]);

        Venta_Detalles::create([
            'producto_id' => $request->producto_id,
            'precio_producto' => $request->precio_producto,
            'cantidad' => $request->cantidad,
            'venta_id' => $request->venta_id,
        ]);

        return redirect('venta_detalles/create')->with('status', 'Venta_Detalles añadido');
    }

    public function show(Venta_Detalles $ventaDetalles)
    {
        //
    }

    public function edit(Venta_Detalles $ventaDetalles, int $id)
    {
        $venta_detalle = Venta_Detalles::findOrFail($id);
        return view('venta_detalle.edit', compact('venta_detalle'));
    }

    public function update(VentaDetallesRequest $request, int $id)
    {
        $request->validate([
            'producto_id' => 'required|max:255',
            'precio_producto' => 'required|numeric',
            'cantidad' => 'required|numeric|min:0',
            'venta_id' => 'required|max:255'
        ]);

        Venta_Detalles::findOrfail($id)->update([
            'producto_id' => $request->producto_id,
            'precio_producto' => $request->precio_producto,
            'cantidad' => $request->cantidad,
            'venta_id' => $request->venta_id,
        ]);

        return redirect()->back()->with('status', 'venta_detalles actualizado');
    }

    public function destroy(Venta_Detalles $ventaDetalles, int $id)
    {
        $venta_detalle = Venta_Detalles::findOrFail($id);
        $venta_detalle->delete();

        return redirect()->back()->with('status', 'Venta_Detalles eliminado');
    }
}
