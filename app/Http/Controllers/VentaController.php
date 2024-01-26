<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Models\Venta;

class VentaController extends Controller
{
    const NUMBER_OF_ITEMS_PER_PAGE = 25;
    public function index()
    {
        $ventas = Venta::paginate(self::NUMBER_OF_ITEMS_PER_PAGE);
        return inertia('Ventas/Index', ['ventas' => $ventas]);

    }

    public function create()
    {
        $clientes = Cliente::all();
        return inertia('Ventas/Create', ['clientes' => $clientes ]);
    }

    public function store(Request $request)
    {
        Venta::create($request->validated());
        return redirect()->route('Venta.index');
    }

    public function show(Venta $venta)
    {
        //
    }

    public function edit(Venta $venta)
    {
        return inertia('Ventas/Edit', ['producto' =>$venta]);
    }

    public function update(Request $request, Venta $venta)
    {
        $venta->update($request->validated());
        return redirect()->route('ventas.index');
    }

    public function destroy(Venta $venta)
    {
        $venta->delete();
        return redirect()->route('ventas.index');
    }
}
