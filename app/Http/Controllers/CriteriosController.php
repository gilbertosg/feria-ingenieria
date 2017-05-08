<?php

namespace App\Http\Controllers;

use App\Criterio;
use App\Categoria;
use App\Http\Requests\CriterioRequest;

class CriteriosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $criterios = Criterio::all();

		return view('criterios.index', compact('criterios'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $ids = Categoria::lists('categoria', 'id');

        return view('criterios.create', compact('ids'));
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param CriterioRequest $request
     * @return Response
     */
    public function store(CriterioRequest $request)
    {
        $criterio = new Criterio;
        $criterio->criterio = $request->get('criterio');
        $criterio->categoria_id = $request->get('categoria_id');
        $criterio->save();

        return redirect('criterios');
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
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_criterio
     * @return Response
     */
    public function destroy($id_criterio)
    {
        $criterio = Criterio::findOrFail($id_criterio);
        $criterio->delete();
        return redirect('criterios');
    }

}
