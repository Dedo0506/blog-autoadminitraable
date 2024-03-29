<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::all();
        return view('admin.categorias.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(([
            'name'=>'required',
            'slug'=>'required|unique:categorias'
        ]));
        $categoria = Categoria::create($request->all());

        return redirect()->route('admin.categorias.edit', $categoria)
        ->with('info', 'La categoría se creo con éxito');;
    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria $categoria)
    {
        return view('admin.categorias.show', compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoria $categoria)
    {
        return view('admin.categorias.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categoria $categoria)
	{
		$request->validate([
			'name' => 'required',
			'slug' => "required|unique:categorias,slug,$categoria->id"
		]);
		$categoria->update($request->all());
		
		return redirect()->route('admin.categorias.edit', $categoria)
			->with('info', 'La categoría se actualizó con éxito');
	}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return redirect()->route('admin.categorias.index')
        ->with('info', 'La categoría se eliminó con éxito');
    }
}
