<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\UserRequest;

class UsuariosController extends Controller
{
    public function __construct()
    {
        // No podrán ver ninguna página si no están autenticados
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $usuarios = User::all();

        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Edit user admin
     *
     * @param  int  $id
     * @return view useradmins/{id}/edit
     */
    public function edit($id)
    {
        $usuario = User::find($id);

        return view('usuarios.edit', compact('id','usuario'));
    }

    /**
     * Update user admin
     *
     * @param UserRequest $request
     * @param  int  $id
     * @return redirect useradmins
     */
    public function update($id, UserRequest $request)
    {
        $user = User::find($id);
        $user->nombre = $request->get('nombre');
        $user->apellidos = $request->get('apellidos');
        $user->privilegio = $request->get('privilegio');
        $user->save();

        return redirect('usuarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $usuario = User::findOrFail($id);
        $usuario->delete();
        return redirect('usuarios');
    }

}