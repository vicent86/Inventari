<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteRequest;
use App\Models\Cliente;

class ClienteController extends Controller
{
    const NUMBER_OF_ITEMS_PER_PAGE = 25;
    public function index()
    {
        $clientes = Cliente::paginate(self::NUMBER_OF_ITEMS_PER_PAGE);
        return inertia('Clientes/Index', ['clientes' => $clientes]);

    }


    // public function ClienteLista(Request $request){

    //     $nombre = $request->nombre;
    //     $direccion = $request->direccion;
    //     $telefono = $request->telefono;
    //     $cif = $request->cif;
    //     $cliente = Cliente::withCount([
    //         'venta AS importe_total' => function ($query){

    //             $query->select(DB::raw("COALESCE(SUM(importe_total),0)"));

    //         },

    //         'venta AS total_importe_pagado' => function ($query){

    //             $query->select(DB::raw("COALESCE(SUM(importe_pagado),0)"));

    //         },

    //     ])->orderBy('nombre_cliente','asc');

    //     if($nombre != ''){

    //         $cliente->where('nombre_cliente','LIKE','%'.$nombre.'%');

    //     }

    //     if($direccion != ''){

    //         $cliente->where('direccion','LIKE','%'.$direccion.'%');

    //     }

    //     if($telefono != ''){

    //         $telefono->where('telefono','LIKE','%'.$telefono.'%');

    //     }

    //     if($cif != ''){

    //         $cif->where('cif','LIKE','%'.$cif.'%');

    //     }

    //     $cliente = $cliente->paginate(10);

    //     return $cliente;

    // }

    public function create()
    {
        return inertia('Clientes/create');
    }

    public function store(ClienteRequest $request)
    {
        Cliente::create($request->validated());
        return redirect()->route('clientes.index');
    }

    public function show(Cliente $cliente)
    {
        //
    }

    public function edit(Cliente $cliente)
    {
        return inertia('Cliente/Edit', ['cliente' => $cliente]);
    }


    public function update(ClienteRequest $request, Cliente $cliente)
    {
        $cliente->update($request->validated());
        return redirect()->route('clientes.index');
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index');
    }
}
