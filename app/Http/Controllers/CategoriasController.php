<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Http\Requests\CategoriaRequest;

class CategoriasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $categorias = Categoria::all();

		return view('categorias.index', compact('categorias'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('categorias.create');
	}

    /**
     * Store a newly created resource in storage.
     * @param CategoriaRequest $request
     * @return Response
     */
    public function store(CategoriaRequest $request)
    {
        Categoria::create($request->all());

        return redirect('categorias');
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_categoria
     * @return Response
     */
    public function edit($id_categoria)
    {
        $categoria = Categoria::findOrFail($id_categoria);
        return view('categorias.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id_categoria
     * @param CategoriaRequest $request
     * @return Response
     */
    public function update($id_categoria, CategoriaRequest $request)
    {
        $categoria = Categoria::findOrFail($id_categoria);

        $categoria->update($request->all());

        return redirect('categorias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_categoria
     * @return Response
     */
    public function destroy($id_categoria)
    {
        $categoria = Categoria::findOrFail($id_categoria);
        $categoria->delete();
        return redirect('categorias');
    }

}
