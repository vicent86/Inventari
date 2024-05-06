<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriaRequest;
use App\Http\Resources\CategoriaResource;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    
    public function index()
    {
        $categorias = Categoria::orderBy('nombre', 'asc')
        ->paginate(10);

        return CategoriaResource::collection($categorias);
    }

    public function create()
    {
        //
    }

    public function store(CategoriaRequest $request)
    {
    
        $categoria = new Categoria;
        $categoria->nombre= $request->input('nombre');
        $categoria->descripcion =  $request->input('descripcion');
        $categoria->estado = $request->input('estado') == 'true' ? true : false;
        $categoria->save();

        return response()->json($categoria, 201);

    }
    public function show(Categoria $categoria)
    {
        return new CategoriaResource($categoria);
    }
    public function edit(int $id)
    {
        
        $categoria = Categoria::findOrFail($id);
        return view('categoria.edit', compact('categoria'));
    }
    public function update(CategoriaRequest $request, Categoria $categoria)
    {
    
        $categoria->update($request->all());
        return response()->json($categoria, 200);

    }
    public function destroy(Categoria $categoria)
    {
   
        $categoria->delete();
        return response()->json(null, 204);

    }
}
