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
        // $request->validate([
        //     'nombre' => 'required|max:100',
        //     'direccion' => 'required|max:255|string',
        //     'telefono'=>'required|max:255|string',
        //     'cif'=> 'required|max:255|string',
        //     'telefono' => 'sometimes'
        // ]);

        // Cliente::create([
        //     'nombre' => $request->nombre,
        //     'direccion' => $request->direccion,
        //     'telefono' => $request->telefono,
        //     'cif' => $request->cif,
        //     'telefono' => $request->telefono == true ? 1 : 0,
        // ]);

        // return redirect('clientes/create')->with('status', 'Cliente añadido');

        $cliente = new Cliente;
        $cliente->nombre= $request->input('nombre');
        $cliente->direccion =  $request->input('direccion');
        $cliente->telefono = $request->input('telefono');
        $cliente->cif=$request->input('cif');
        $cliente->estado = $request->has('estado');
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
        // $request->validate([
        //     'nombre' => 'required|max:100',
        //     'direccion' => 'required|max:255|string',
        //     'telefono'=>'required|max:255|string',
        //     'cif'=> 'required|max:255|string',
        //     'estado' => 'sometimes'
        // ]);

        // Cliente::findOrfail($id)->update([
        //     'nombre' => $request->nombre,
        //     'direccion' => $request->direccion,
        //     'telefono' => $request->telefono,
        //     'cif' => $request->cif,
        //     'estado' => $request->estado == true ? 1 : 0,
        // ]);

        // return redirect()->back()->with('status', 'Cliente actualizado');

        $cliente->update($request->all());
        return response()->json($cliente, 200);

    }

    public function destroy(Cliente $cliente)
    {
    //     $cliente = Cliente::findOrFail($id);
    //     $cliente->delete();

    //     return redirect()->back()->with('status', 'Cliente eliminado');

        $cliente->delete();
        return response()->json(null, 204);
    }
}
