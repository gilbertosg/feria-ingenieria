<?php

namespace App\Http\Controllers;

use App\Proyecto;

use Carbon\Carbon;

class ProyectosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $proyectos = Proyecto::where('created_at', '>=', Carbon::now()->subMonths(2))->get();
		return view('proyectos.index', compact('proyectos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('proyectos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id_proyecto
	 * @return Response
	 */
	public function show($id_proyecto)
    {
        $proyecto = Proyecto::findOrFail($id_proyecto);

        return view('proyectos.show', compact('proyecto'));
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
	 * @param  int  $id_proyecto
	 * @return Response
	 */
	public function destroy($id_proyecto)
	{
        $proyecto = Proyecto::findOrFail($id_proyecto);
        $proyecto->delete();
        return redirect('proyectos');
	}

}
