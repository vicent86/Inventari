<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProveedorResource;
use App\Models\Proveedor;
use App\Http\Requests\ProveedorRequest;

class ProveedorController extends Controller
{

    public function index()
    {
        $proveedores = Proveedor::orderBy('nombre', 'asc')
        ->paginate(10);

        return ProveedorResource::collection($proveedores);
    }

    
    public function create()
    {
        //return view('proveedor.create');
    }

    public function store(ProveedorRequest $request)
    {

        $proveedor = new Proveedor;
        $proveedor->nombre= $request->input('nombre');
        $proveedor->direccion =  $request->input('direccion');
        $proveedor->email = $request->input('email');
        $proveedor->cif=$request->input('cif');
        $proveedor->estado = $request->has('estado');
        $proveedor->cualificacion =$request->input('cualificacion');
        $proveedor->save();

        return response()->json($proveedor, 201);
    }

    

    public function show(Proveedor $proveedor, int $id)
    {
        
        $proveedor = Proveedor::find($id);
        if (is_null($proveedor)) {
            return response()->json(['message' => 'Proveedor no encontrado'], 404);
        }
        return response()->json($proveedor, 200);

        //return new ProveedorResource($proveedor);
    
    }
    public function edit(Proveedor $proveedor,int $id)
    {
        $proveedor = Proveedor::findOrFail($id);
        return view('proveedor.edit', compact('proveedor'));
    }

    public function update(ProveedorRequest $request, Proveedor $proveedor, int $id)
    {
        
        $proveedor = Proveedor::find($id);
        if (is_null($proveedor)) {
            return response()->json(['message' => 'Proveedor no encontrado'], 404);
        }

        $proveedor->update($request->all());
        return response()->json($proveedor, 200);
    }

    public function destroy(Proveedor $proveedor, int $id)
    {

        $proveedor = Proveedor::find($id);
        if (is_null($proveedor)) {
            return response()->json(['message' => 'Proveedor no encontrado'], 404);
        }

        $proveedor->delete();
        return response()->json(null, 204);

    }
}
