<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');

Route::get('registrate', 'WebRegisterController@index');
Route::post('registrar', 'WebRegisterController@registro');
Route::resource('profesores', 'ProfesoresController');
Route::resource('categorias', 'CategoriasController');
Route::resource('proyectos', 'ProyectosController');
Route::resource('usuarios', 'UsuariosController');
Route::resource('criterios', 'CriteriosController');
Route::resource('evaluaciones', 'CalificacionesController');
Route::resource('premiaciones', 'PremiacionesController');
