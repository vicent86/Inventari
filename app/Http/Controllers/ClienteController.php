<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteRequest;
use App\Models\Cliente;

class ClienteController extends Controller
{
    
    public function index()
    {
        $clientes = Cliente::get();
        return view('cliente.index',  compact('clientes'));

    }

    public function create()
    {
        return view('cliente.create');
    }

    public function store(ClienteRequest $request)
    {
        $request->validate([
            'nombre' => 'required|max:100',
            'direccion' => 'required|max:255|string',
            'telefono'=>'required|max:255|string',
            'cif'=> 'required|max:255|string',
            'estado' => 'sometimes'
        ]);

        Cliente::create([
            'nombre' => $request->nombre,
            'direccion' => $request->direccion,
            'telefono' => $request->telefono,
            'cif' => $request->cif,
            'estado' => $request->estado == true ? 1 : 0,
        ]);

        return redirect('clientes/create')->with('status', 'Cliente añadido');
    }

    public function show(Cliente $cliente)
    {
        //
    }

    public function edit(int $id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('cliente.edit', compact('cliente'));
    }


    public function update(ClienteRequest $request, int $id)
    {
        $request->validate([
            'nombre' => 'required|max:100',
            'direccion' => 'required|max:255|string',
            'telefono'=>'required|max:255|string',
            'cif'=> 'required|max:255|string',
            'estado' => 'sometimes'
        ]);

        Cliente::findOrfail($id)->update([
            'nombre' => $request->nombre,
            'direccion' => $request->direccion,
            'telefono' => $request->telefono,
            'cif' => $request->cif,
            'estado' => $request->estado == true ? 1 : 0,
        ]);

        return redirect()->back()->with('status', 'Cliente actualizado');

    }

    public function destroy(int $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();

        return redirect()->back()->with('status', 'Cliente eliminado');
    }
}
