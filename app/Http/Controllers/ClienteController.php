<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteRequest;
use App\Http\Resources\ClienteResource;
use App\Models\Cliente;

class ClienteController extends Controller
{
    
    public function index()
    {
        $clientes = Cliente::orderBy('nombre', 'asc')
        ->paginate(10);

        
        return ClienteResource::collection($clientes);

    }

    public function create()
    {
        return view('cliente.create');
    }

    public function store(ClienteRequest $request)
    {
        
        $cliente = new Cliente;
        $cliente->nombre= $request->input('nombre');
        $cliente->direccion =  $request->input('direccion');
        $cliente->telefono = $request->input('telefono');
        $cliente->cif=$request->input('cif');
        $cliente->estado = $request->input('estado') == 'true' ? true : false;
        $cliente->save();

        return response()->json($cliente, 201);
    }

    public function show(Cliente $cliente)
    {
        return new ClienteResource($cliente);
    }

    public function edit(int $id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('cliente.edit', compact('cliente'));
    }


    public function update(ClienteRequest $request, Cliente $cliente)
    {
        
        $cliente->update($request->all());
        return response()->json($cliente, 200);

    }

    public function destroy(Cliente $cliente)
    {
   
        $cliente->delete();
        return response()->json(null, 204);
    }
}
