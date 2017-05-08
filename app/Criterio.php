<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Criterio extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'criterios';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['criterio'];

    /**
     * Many crietrias belong to a categorie
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categoria(){
        return $this->belongsTo('App\Categoria');
    }

}
