<?php

namespace App\Http\Controllers;

use App\Http\Requests\PagoRequest;
use App\Http\Resources\PagoResource;
use App\Models\Pago;
use App\Models\Venta;


class PagoController extends Controller
{

    public function index()
    {
        // $pagos = Pago::get();
        // return view('pago.index',  compact('pagos'));

        $pagos = Pago::orderBy('importe', 'asc')
        ->paginate(10);

        
        return PagoResource::collection($pagos);
    }

    public function create()
    {
        return view('pago.create');
    }

    public function store(PagoRequest $request)
    {
        // $request->validate([
        //     'id_venta' => 'required|max:10|int',
        //     'importe' => 'required|numeric|min:0|regex:/^\d{1,6}(\.\d{1,2})?$/',
        //     'iva'=>'required|numeric|min:0|regex:/^\d{1,6}(\.\d{1,2})?$/',
        //     'total'=> 'required|numeric|min:0|regex:/^\d{1,6}(\.\d{1,2})?$/',
        //     'fecha_pago'=>'required|date',
        //     'metodo_pago' => 'sometimes'
        // ]);

        // $pago = Pago::create([
        //     'id_venta' => $request->id_venta,
        //     'importe' => $request->importe,
        //     'iva' => $request->iva,
        //     'total' => $request->total,
        //     'fecha_pago' => $request->fecha_pago,
        //     'metodo_pago' => $request->metodo_pago == true ? 1 : 0,
        // ]);

        // $pago->totalPago();

        // return redirect('pagos/create')->with('status', 'Pago añadido');

        $pago = new Pago;
        $pago->id_venta = $request->input('id_venta');
        $pago->importe = $request->input('importe');
        $pago->iva = $request->input('iva');
        $pago->totalPago();
        $pago->fecha_pago = $request->input('fecha_pago');
        $pago->metodo_pago = $request->has('metodo_pago') ? 1 : 0 ;
        $pago->save();

        $venta = Venta::find($request->input( "id_venta" ) );

        $venta-> precio_total = $pago->total;
        $venta-> save();

        return response()->json($pago, 201);
    }

    public function show($id)
    {
        $pago = Pago::find($id);
        if (is_null($pago)) {
            return response()->json(['message' => 'Pago no encontrado'], 404);
        }
        return response()->json($pago, 200);
    }

    public function edit(int $id)
    {
        $pago = Pago::findOrFail($id);
        return view('pago.edit', compact('pago'));
    }

    public function update(PagoRequest $request, Pago $pago)
    {
        // $request->validate([
        //     'id_venta' => 'required|max:10|int',
        //     'importe' => 'required|numeric|min:0|regex:/^\d{1,6}(\.\d{1,2})?$/',
        //     'iva'=>'required|numeric|min:0|regex:/^\d{1,6}(\.\d{1,2})?$/',
        //     'total'=> 'required|numeric|min:0|regex:/^\d{1,6}(\.\d{1,2})?$/',
        //     'fecha_pago'=>'required|date',
        //     'metodo_pago' => 'sometimes'
        // ]);
        
        // $pago = Pago::findOrFail($id);
        // $pago->update([
        //     'id_venta' => $request->id_venta,
        //     'importe' => $request->importe,
        //     'iva' => $request->iva,
        //     'total' => $request->total,
        //     'fecha_pago' => $request->fecha_pago,
        //     'metodo_pago' => $request->metodo_pago == true ? 1 : 0,
        // ]);

        // $pago->totalPago();

        // return redirect('pagos/create')->with('status', 'Pago actualizado');

        $pago->update($request->all());
        return response()->json($pago, 200);
    }

    public function destroy(Pago $pago)
    {

        // $pago = Pago::findOrFail($id);
        // $pago->delete();

        // return redirect()->back()->with('status', 'Pago eliminado');

        $pago->delete();
        return response()->json(null, 204);

    }
}
