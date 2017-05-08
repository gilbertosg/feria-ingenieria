<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calificaciones extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'calificaciones';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'proyecto_id', 'calificacion'];

    /**
     *
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function proyecto(){
        return $this->belongsTo('App\Proyecto');
    }

}