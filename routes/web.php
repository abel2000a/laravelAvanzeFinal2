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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('cliente/index',"ClienteController@index");
Route::get('cliente/show/{id}',"ClienteController@show");

Route::get('persona/index',"PersonaController@index");
Route::get('persona/show/{id}',"PersonaController@show");

Route::get('egresado/index',"EgresadoController@index");
Route::get('egresado/show/{id}',"EgresadoController@show");

Route::get('escuela/index',"EscuelaController@index");
Route::get('escuela/show/{id}',"EscuelaController@show");

Route::get('facultad/index',"FacultadController@index"); 
Route::get('facultad/show/{id}',"FacultadController@show");

Route::get('experiencia/index',"ExperienciaController@index");
Route::get('experiencia/show/{id}',"ExperienciaController@show");

Route::get('formacion/index',"FormacionController@index");
Route::get('formacion/show/{id}',"FormacionController@show");

Route::get('empresa/index',"EmpresaController@index");
Route::get('empresa/show/{id}',"EmpresaController@show");