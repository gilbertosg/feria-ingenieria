<?php

namespace App\Http\Controllers;

use App\Calificaciones;
use App\Proyecto;
use App\Http\Requests\ProyectoRequest;

use DB;
use Carbon\Carbon;

class PremiacionesController extends Controller {

    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $calificaciones = Calificaciones::where('created_at', '>=', Carbon::now()->subMonths(2))->orderBy('created_at')->get();

        /*$calificaciones = DB::table('calificaciones')
            ->select('id', 'proyecto_id', DB::raw('AVG(calificacion) as average_calif'), DB::raw('count(proyecto_id) as count'))
            ->where('created_at', '>=', Carbon::now()->startOfMonth())
            ->groupBy('proyecto_id')
            ->orderBy('average_calif', 'DESC')
            ->get();

        $proyectos = Proyecto::where('id_proyecto',123)->get();

        //dd($calificaciones);

        //dd($proyectos);
        */

        return view('premiaciones.index', compact('calificaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('profesores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ProyectoRequest $request
     * @return Response
     */
    public function store(ProyectoRequest $request)
    {

        Proyecto::create($request->all());

        if(\Auth::user()->privilegio == 1){
            return redirect('proyectos');
        }

        return redirect('profesores');
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

        return view('profesores.show', compact('proyecto'));
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
