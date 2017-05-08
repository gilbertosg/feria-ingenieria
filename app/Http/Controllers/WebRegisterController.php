<?php

namespace App\Http\Controllers;

use App\Proyecto;
use App\Http\Requests\ProfesorRequest;
use App\User;

use Session;
use Auth;

class WebRegisterController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('web-register.index');
    }

    /**
     * Store professor
     *
     * @param ProfesorRequest $request
     * @return redirect registrate
     */
    public function registro(ProfesorRequest $request)
    {
        $email = $request->get('email');
        $user = User::where('email', $email)->first();
        if($user){
            $user->nombre = $request->get('nombre');
            $user->apellidos = $request->get('apellidos');
            $user->privilegio = 3;
            $user->email = $request->get('email');
            $user->password = bcrypt($request->get('password'));
            $user->save();
        }else{
            $user = new User;
            $user->nombre = $request->get('nombre');
            $user->apellidos = $request->get('apellidos');
            $user->privilegio = 3;
            $user->email = $request->get('email');
            $user->password = bcrypt($request->get('password'));
            $user->save();
        }

        Auth::login($user);

        return redirect('proyectos');
    }

}
