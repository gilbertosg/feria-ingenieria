<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function(Blueprint $table)
        {
            $table->increments('id');
            $table->text('proyecto');
            $table->text('descripcion');
            $table->text('materia');
            $table->text('otras_materias');
            $table->text('profesor');
            $table->text('otros_profesores');
            $table->text('alumno1');
            $table->string('carrera1');
            $table->text('alumno2');
            $table->string('carrera2');
            $table->text('alumno3');
            $table->string('carrera3');
            $table->text('alumno4');
            $table->string('carrera4');
            $table->text('alumno5');
            $table->string('carrera5');
            $table->text('alumno6');
            $table->string('carrera6');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('proyectos');
    }
}
