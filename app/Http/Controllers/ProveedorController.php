<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;
use App\Http\Requests\ProveedorRequest;

class ProveedorController extends Controller
{

    public function index()
    {
        $proveedores = Proveedor::get();
        return view('proveedor.index',  compact('proveedores'));
    }

    
    public function create()
    {
        return view('proveedor.create');
    }

    public function store(ProveedorRequest $request)
    {

        $request->validate([
            'nombre' => 'required|max:255',
            'direccion' => 'required|max:255|string',
            'email' => 'required|nullable|email|unique:proveedores,email',
            'cif'=>  'required|max:255|string',
            'estado' => 'sometimes',
            'cualificacion' => 'required|numeric|min:1|max:5',
        ]);

        Proveedor::create([
            'nombre' => $request->nombre,
            'direccion' => $request->direccion,
            'email' => $request->email,
            'cif' => $request->cif,
            'estado' => $request->estado == true ? 1 : 0,
            'cualificacion' => $request->cualificacion
        ]);

        return redirect('proveedores/create')->with('status', 'Proveedor añadido');

    }

    public function show(Proveedor $proveedor)
    {
        //
    }
    public function edit(Proveedor $proveedor,int $id)
    {
        $proveedor = Proveedor::findOrFail($id);
        return view('proveedor.edit', compact('proveedor'));
    }

    public function update(ProveedorRequest $request, int $id)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'direccion' => 'required|max:255|string',
            'email' => 'required|nullable|email|unique:proveedores,email',
            'cif'=>  'required|max:255|string',
            'estado' => 'sometimes',
            'cualificacion' => 'required|numeric|min:1|max:5',
        ]);

        Proveedor::findOrfail($id)->update([
            'nombre' => $request->nombre,
            'direccion' => $request->direccion,
            'email' => $request->email,
            'cif' => $request->cif,
            'estado' => $request->estado == true ? 1 : 0,
            'cualificacion' => $request->cualificacion
        ]);

        return redirect()->back()->with('status', 'Proveedor actualizado');
    }

    public function destroy(int $id)
    {

        $proveedor = Proveedor::findOrFail($id);
        $proveedor->delete();

        return redirect()->back()->with('status', 'Proveedor eliminado');

    }
}
