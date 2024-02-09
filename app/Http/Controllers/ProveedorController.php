<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;
use App\Http\Requests\ProveedorRequest;

class ProveedorController extends Controller
{
    const NUMBER_OF_ITEMS_PER_PAGE = 25;
    public function index()
    {
        $proveedores = Proveedor::paginate(self::NUMBER_OF_ITEMS_PER_PAGE);
        return inertia('Proveedores/Index', ['proveedores' => $proveedores]);
    }

    
    public function create()
    {
        return inertia('Proveedores/Create');
    }

    public function store(ProveedorRequest $request)
    {

        Proveedor::create($request->validated());
        return redirect()->route('proveedores.index');

    }

    public function show(Proveedor $proveedor)
    {
        //
    }
    public function edit(Proveedor $proveedor)
    {
        return inertia('Proveedores/Edit', ['proveedor' =>$proveedor]);
    }

    public function update(ProveedorRequest $request, Proveedor $proveedor)
    {
        $proveedor->update($request->validated());
        return redirect()->route('proveedores.index');
    }

    public function destroy(Proveedor $proveedor)
    {

        $proveedor->delete();
        return redirect()->route('proveedores.index');

    }
}
