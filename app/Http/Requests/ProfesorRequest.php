<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProfesorRequest extends Request {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required',
            'apellidos' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed|min:3',
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'nombre.required' => 'El nombre no puede estar vacío!',
            'apellidos.required' => 'Los apellidos no pueden estar vacíos!',
            'email.required' => 'El correo electrónico no puede estar vacío!',
            'password.confirmed' => 'Las contraseñas no coinciden!',
            'password.required' => 'La contraseña no puede estar vacía!',
            'password.min' => 'La contraseña debe tener al menos tres caracteres!',
        ];
    }

}
