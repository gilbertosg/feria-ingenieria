<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'proyectos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'proyecto',
        'descripcion',
        'materia',
        'otras_materias',
        'profesor',
        'otros_profesores',
        'alumno1',
        'carrera1',
        'alumno2',
        'carrera2',
        'alumno3',
        'carrera3',
        'alumno4',
        'carrera4',
        'alumno5',
        'carrera5',
        'alumno6',
        'carrera6',
    ];

    /**
     *
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function calificaciones(){
        return $this->hasMany('App\Calificacion');
    }

}
