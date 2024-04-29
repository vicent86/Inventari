<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriaRequest;
use App\Http\Resources\CategoriaResource;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    
    public function index()
    {
        // $categories = Categoria::get();
        // return view('categoria.index',  compact('categories'));

        $categorias = Categoria::orderBy('nombre', 'asc')
        ->paginate(10);

        
        return CategoriaResource::collection($categorias);
    }

    public function create()
    {
        //return view('categoria.create');
    }

    public function store(CategoriaRequest $request)
    {
    
    //     $request->validate([
    //         'nombre' => 'required|max:255',
    //         'descripcion' => 'required|max:255|string',
    //         'estado' => 'sometimes'
    //     ]);

    //     Categoria::create([
    //         'nombre' => $request->nombre,
    //         'descripcion' => $request->descripcion,
    //         'estado' => $request->estado == true ? 1 : 0,
    //     ]);

    //     return redirect('categories/create')->with('status', 'Categoria añadida');

        $categoria = new Categoria;
        $categoria->nombre= $request->input('nombre');
        $categoria->descripcion =  $request->input('descripcion');
        $categoria->estado = $request->has('estado');
        $categoria->save();

        return response()->json($categoria, 201);

        // $categoria  = Categoria::create($request->validated());
        // return new CategoriaResource($categoria);
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
       
        // $request->validate([
        //     'nombre' => 'required|max:255',
        //     'descripcion' => 'required|max:255|string',
        //     'estado' => 'sometimes'
        // ]);

        // Categoria::findOrfail($id)->update([
        //     'nombre' => $request->nombre,
        //     'descripcion' => $request->descripcion,
        //     'estado' => $request->estado == true ? 1 : 0,
        // ]);

        // return redirect()->back()->with('status', 'Categoria actualizada');

        $categoria->update($request->all());
        return response()->json($categoria, 200);


    }
    public function destroy(Categoria $categoria)
    {
       
        // $categoria = Categoria::findOrFail($id);
        // $categoria->delete();

        // return redirect()->back()->with('status', 'Categoria eliminada');

        
        $categoria->delete();
        return response()->json(null, 204);
        //return response()->noContent();

    }
}
