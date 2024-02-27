<?php

namespace App\Http\Controllers;

use App\Http\Requests\PagoRequest;
use App\Models\Pago;
use App\Models\Venta;


class PagoController extends Controller
{

    public function index()
    {
        $pagos = Pago::get();
        return view('pago.index',  compact('pagos'));
    }

    public function create()
    {
        return view('pago.create');
    }

    public function store(PagoRequest $request)
    {
        $request->validate([
            'id_venta' => 'required|max:10|int',
            'importe' => 'required|numeric|min:0|regex:/^\d{1,6}(\.\d{1,2})?$/',
            'iva'=>'required|numeric|min:0|regex:/^\d{1,6}(\.\d{1,2})?$/',
            'total'=> 'required|numeric|min:0|regex:/^\d{1,6}(\.\d{1,2})?$/',
            'fecha_pago'=>'required|date',
            'metodo_pago' => 'sometimes'
        ]);

        $pago = Pago::create([
            'id_venta' => $request->id_venta,
            'importe' => $request->importe,
            'iva' => $request->iva,
            'total' => $request->total,
            'fecha_pago' => $request->fecha_pago,
            'metodo_pago' => $request->metodo_pago == true ? 1 : 0,
        ]);

        $pago->totalPago();

        return redirect('pagos/create')->with('status', 'Pago añadido');
    }

    public function show($id)
    {

        //
    }

    public function edit(int $id)
    {
        $pago = Pago::findOrFail($id);
        return view('pago.edit', compact('pago'));
    }

    public function update(PagoRequest $request, int $id)
    {
        $request->validate([
            'id_venta' => 'required|max:10|int',
            'importe' => 'required|numeric|min:0|regex:/^\d{1,6}(\.\d{1,2})?$/',
            'iva'=>'required|numeric|min:0|regex:/^\d{1,6}(\.\d{1,2})?$/',
            'total'=> 'required|numeric|min:0|regex:/^\d{1,6}(\.\d{1,2})?$/',
            'fecha_pago'=>'required|date',
            'metodo_pago' => 'sometimes'
        ]);
        
        $pago = Pago::findOrFail($id);
        $pago->update([
            'id_venta' => $request->id_venta,
            'importe' => $request->importe,
            'iva' => $request->iva,
            'total' => $request->total,
            'fecha_pago' => $request->fecha_pago,
            'metodo_pago' => $request->metodo_pago == true ? 1 : 0,
        ]);

        $pago->totalPago();

        return redirect('pagos/create')->with('status', 'Pago actualizado');
    }

    public function destroy(int $id)
    {

        $pago = Pago::findOrFail($id);
        $pago->delete();

        return redirect()->back()->with('status', 'Pago eliminado');

    }
}
