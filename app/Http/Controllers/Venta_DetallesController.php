<?php

namespace App\Http\Controllers;


use App\Http\Resources\VentaDetallesResource;
use Illuminate\Http\Request;
use App\Models\Venta_Detalles;
use App\Http\Requests\VentaDetallesRequest;

class Venta_DetallesController extends Controller
{

    public function index()
    {
        $venta_detalles = Venta_Detalles::orderBy('cantidad', 'asc')
        ->paginate(10);

        
        return VentaDetallesResource::collection($venta_detalles);

    }

    public function create()
    {
        return view('venta_detalle.create');
    }

    public function store(VentaDetallesRequest $request)
    {
        // $request->validate([
        //     'producto_id' => 'required|max:255',
        //     'precio_producto' => 'required|numeric',
        //     'cantidad' => 'required|numeric|min:0',
        //     'venta_id' => 'required|max:255'
        // ]);

        // Venta_Detalles::create([
        //     'producto_id' => $request->producto_id,
        //     'precio_producto' => $request->precio_producto,
        //     'cantidad' => $request->cantidad,
        //     'venta_id' => $request->venta_id,
        // ]);

        // return redirect('venta_detalles/create')->with('status', 'Venta_Detalles añadido');

        $venta_detalle = new Venta_Detalles;
        $venta_detalle->producto_id = $request->input('producto_id');
        $venta_detalle->precio_producto = $request->input('precio_producto');
        $venta_detalle->cantidad =  $request->input('cantidad');
        $venta_detalle->venta_id = $request->input('venta_id');
        $venta_detalle->save();

        return response()->json($venta_detalle, 201);
    }

    public function show($id)
    {
        $ventaDetalles = Venta_Detalles::find($id);
        if (is_null($ventaDetalles)) {
            return response()->json(['message' => 'Venta_Detalle no encontrado'], 404);
        }
        //return new VentaDetallesResource($ventaDetalles);

        return response()->json($ventaDetalles, 200);
    }

    public function edit(Venta_Detalles $ventaDetalles, int $id)
    {
        $venta_detalle = Venta_Detalles::findOrFail($id);
        return view('venta_detalle.edit', compact('venta_detalle'));
    }

    public function update(VentaDetallesRequest $request, Venta_Detalles $venta_detalle)
    {
        // $request->validate([
        //     'producto_id' => 'required|max:255',
        //     'precio_producto' => 'required|numeric',
        //     'cantidad' => 'required|numeric|min:0',
        //     'venta_id' => 'required|max:255'
        // ]);

        // Venta_Detalles::findOrfail($id)->update([
        //     'producto_id' => $request->producto_id,
        //     'precio_producto' => $request->precio_producto,
        //     'cantidad' => $request->cantidad,
        //     'venta_id' => $request->venta_id,
        // ]);

        // return redirect()->back()->with('status', 'venta_detalles actualizado');

        
        $venta_detalle->update($request->all());
        return response()->json($venta_detalle, 200);
    }

    public function destroy(Venta_Detalles $ventaDetalles, int $id)
    {
        // $venta_detalle = Venta_Detalles::findOrFail($id);
        // $venta_detalle->delete();

        // return redirect()->back()->with('status', 'Venta_Detalles eliminado');

        $venta_detalle = Venta_Detalles::find($id);
        if (is_null($venta_detalle)) {
            return response()->json(['message' => 'Venta_Detalle no encontrado'], 404);
        }

        $venta_detalle->delete();
        return response()->json(null, 204);
    }
}
