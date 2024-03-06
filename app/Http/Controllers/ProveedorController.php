<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProveedorResource;
use Illuminate\Http\Request;
use App\Models\Proveedor;
use App\Http\Requests\ProveedorRequest;

class ProveedorController extends Controller
{

    public function index()
    {
        // $proveedores = Proveedor::get();
        // return view('proveedor.index',  compact('proveedores'));

        $proveedores = Proveedor::orderBy('nombre', 'asc')
        ->paginate(10);

        
        return ProveedorResource::collection($proveedores);

    }

    
    public function create()
    {
        return view('proveedor.create');
    }

    public function store(ProveedorRequest $request)
    {

        // $request->validate([
        //     'nombre' => 'required|max:255',
        //     'direccion' => 'required|max:255|string',
        //     'email' => 'required|nullable|email|unique:proveedores,email',
        //     'cif'=>  'required|max:255|string',
        //     'estado' => 'sometimes',
        //     'cualificacion' => 'required|numeric|min:1|max:5',
        // ]);

        // Proveedor::create([
        //     'nombre' => $request->nombre,
        //     'direccion' => $request->direccion,
        //     'email' => $request->email,
        //     'cif' => $request->cif,
        //     'estado' => $request->estado == true ? 1 : 0,
        //     'cualificacion' => $request->cualificacion
        // ]);

        // return redirect('proveedores/create')->with('status', 'Proveedor añadido');

        $proveedor = new Proveedor;
        $proveedor->nombre= $request->input('nombre');
        $proveedor->direccion =  $request->input('direccion');
        $proveedor->email = $request->has('email');
        $proveedor->cif=$request->input('cif');
        $proveedor->estado = $request->has('estado');
        $proveedor->save();

        return response()->json($proveedor, 201);
    }

    

    public function show(Proveedor $proveedor)
    {
        return new ProveedorResource($proveedor);
    
    }
    public function edit(Proveedor $proveedor,int $id)
    {
        $proveedor = Proveedor::findOrFail($id);
        return view('proveedor.edit', compact('proveedor'));
    }

    public function update(ProveedorRequest $request, Proveedor  $proveedor)
    {
        // $request->validate([
        //     'nombre' => 'required|max:255',
        //     'direccion' => 'required|max:255|string',
        //     'email' => 'required|nullable|email|unique:proveedores,email',
        //     'cif'=>  'required|max:255|string',
        //     'estado' => 'sometimes',
        //     'cualificacion' => 'required|numeric|min:1|max:5',
        // ]);

        // Proveedor::findOrfail($id)->update([
        //     'nombre' => $request->nombre,
        //     'direccion' => $request->direccion,
        //     'email' => $request->email,
        //     'cif' => $request->cif,
        //     'estado' => $request->estado == true ? 1 : 0,
        //     'cualificacion' => $request->cualificacion
        // ]);

        // return redirect()->back()->with('status', 'Proveedor actualizado');

        $proveedor->update($request->all());
        return response()->json($proveedor, 200);
    }

    public function destroy(Proveedor $proveedor)
    {

        // $proveedor = Proveedor::findOrFail($id);
        // $proveedor->delete();

        // return redirect()->back()->with('status', 'Proveedor eliminado');

        $proveedor->delete();
        return response()->json(null, 204);

    }
}
