<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriaRequest;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    
    public function index()
    {
        $categories = Categoria::get();
        return view('categoria.index',  compact('categories'));
    }

    public function create()
    {
        return view('categoria.create');
    }

    public function store(CategoriaRequest $request)
    {
    
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required|max:255|string',
            'estado' => 'sometimes'
        ]);

        Categoria::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'estado' => $request->estado == true ? 1 : 0,
        ]);

        return redirect('categories/create')->with('status', 'Categoria añadida');
    }
    public function show(Categoria $categoria)
    {
        //
    }
    public function edit(int $id)
    {
        
        $categoria = Categoria::findOrFail($id);
        return view('categoria.edit', compact('categoria'));
    }
    public function update(CategoriaRequest $request, int $id)
    {
       
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required|max:255|string',
            'estado' => 'sometimes'
        ]);

        Categoria::findOrfail($id)->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'estado' => $request->estado == true ? 1 : 0,
        ]);

        return redirect()->back()->with('status', 'Categoria actualizada');

    }
    public function destroy(int $id)
    {
       
        $categoria = Categoria::findOrFail($id);
        $categoria->delete();

        return redirect()->back()->with('status', 'Categoria eliminada');

    }
}
