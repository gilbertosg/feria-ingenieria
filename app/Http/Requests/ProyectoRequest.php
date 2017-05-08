<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProyectoRequest extends Request {

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
            'proyecto' => 'required',
            'descripcion' => 'required',
            'materia' => 'required',
            'profesor' => 'required',
            'alumno1' => 'required',
            'carrera1' => 'required',
		];
	}

}
