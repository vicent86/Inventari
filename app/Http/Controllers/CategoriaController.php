<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriaRequest;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    const NUMBER_OF_ITEMS_PER_PAGE = 25;
    public function index()
    {
        $categories = Categoria::paginate(self::NUMBER_OF_ITEMS_PER_PAGE);
        return inertia('Categories/Index', ['categories' => $categories]);
    }

    public function create()
    {
        return inertia('Categories/Create');
    }
    
    public function store(CategoriaRequest $request)
    {
       Categoria::create($request->validated());
       return redirect()->route('categories.index');
    }
    public function show(Categoria $categoria)
    {
        //
    }
    public function edit(Categoria $categoria)
    {
       return inertia('Categories/Edit', ['category' =>$categoria]);
    }
    public function update(CategoriaRequest $request, Categoria $categoria)
    {
        $categoria->update($request->validated());
        return redirect()->route('categories.index');
    }
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return redirect()->route('categories.index');
    }
}
