<?php

namespace App\Http\Controllers;

use App\Calificaciones;
use App\Proyecto;
use App\Categoria;
use App\Http\Requests\CalificacionRequest;

use Carbon\Carbon;

class CalificacionesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

        return view('calificaciones.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $ids_proyectos = Proyecto::where('created_at', '>=', Carbon::now()->subMonths(2))->orderBy('proyecto')->pluck('proyecto', 'id');
        $ids_categorias = Categoria::pluck('categoria', 'id');
		return view('calificaciones.create', compact('ids_proyectos', 'ids_categorias'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
     * @param CalificacionRequest $request
	 * @return Response
	 */
	public function store(CalificacionRequest $request)
	{
        $id = 1;      // \Auth::user()->id;

        $calificacion = new Calificaciones;
        $calificacion->user_id = $id;
        $calificacion->proyecto_id = $request->get('proyecto_id');
        $calificacion->categoria_id = $request->get('categoria_id');
        $calificacion->calificacion = $request->get('calificacion');
        $calificacion->planteamiento = $request->get('planteamiento');
        $calificacion->ejecucion = $request->get('ejecucion');
        $calificacion->presentacion = $request->get('presentacion');
        $calificacion->save();

        return redirect('evaluaciones');
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
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
