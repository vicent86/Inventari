<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Venta;
use Illuminate\Http\Request;
use App\Models\Venta_Detalles;

class Venta_DetallesController extends Controller
{
    const NUMBER_OF_ITEMS_PER_PAGE = 25;
    public function index()
    {
        $venta_detalles = Venta_Detalles::paginate(self::NUMBER_OF_ITEMS_PER_PAGE);
        return inertia('Veneta_Detalles/Index', ['venta_detalles' => $venta_detalles]);

    }

    public function create()
    {
        $productos = Producto::all();
        $ventas = Venta::all();
        return inertia('Venta_detalles/Create', ['productos' => $productos, 'ventas' => $ventas]);
    }

    public function store(Request $request)
    {
        Venta_Detalles::create($request->validated());
        return redirect()->route('Venta_Detalles.index');
    }

    public function show(Venta_Detalles $ventaDetalles)
    {
        //
    }

    public function edit(Venta_Detalles $ventaDetalles)
    {
        return inertia('Venta_Detalles/Edit', ['venta_detalles' =>$ventaDetalles]);
    }

    public function update(Request $request, Venta_Detalles $ventaDetalles)
    {
        $ventaDetalles->update($request->validated());
        return redirect()->route('venta_detalles.index');
    }

    public function destroy(Venta_Detalles $ventaDetalles)
    {
        $ventaDetalles->delete();
        return redirect()->route('venta_detalles.index');
    }
}
