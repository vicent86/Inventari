<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pago;
use App\Models\Venta;
use Illuminate\Support\Facades\DB;

class PagoController extends Controller
{
   
    const NUMBER_OF_ITEMS_PER_PAGE = 25;
    public function index()
    {
        $pagos = Pago::paginate(self::NUMBER_OF_ITEMS_PER_PAGE);
        return inertia('Pagos/Index', ['pagos' => $pagos]);
    }

    public function create()
    {
        $ventas = Venta::all();
        return inertia('Pagos/Create', ['ventas' => $ventas]);
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {

        //
    }

    public function edit(Pago $pago)
    {
        //
    }

    public function update(Request $request, Pago $pago)
    {
        //
    }

    public function destroy($id)
    {

        //

    }
}
