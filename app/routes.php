<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function(){
	return View::make('hello');
});

Route::resource('setors', 'SetorsController');

Route::resource('funcionarios', 'FuncionariosController');

Route::resource('funcionario_setors', 'Funcionario_setorsController');

Route::resource('setors', 'SetorsController');

Route::resource('funcionario_ocorrencia', 'Funcionario_ocorrenciaController');

Route::resource('funcionario_ocorrencia', 'Funcionario_ocorrenciaController');

Route::resource('fichas', 'FichasController');

Route::get('fichas/instrucao/{id}', 'FichasController@getInstrucao');
Route::post('fichas/instrucao/{id}', 'FichasController@setInstrucao');
Route::get('fichas/instrucao/{id}/delete', 'FichasController@destroyInstrucao');

Route::get('fichas/cursos/{id}', 'FichasController@getCursos');
Route::post('fichas/cursos/{id}', 'FichasController@setCursos');
Route::get('fichas/cursos/{id}/delete', 'FichasController@destroyCursos');

Route::get('fichas/empregos/{id}', 'FichasController@getEmpregos');
Route::post('fichas/empregos/{id}', 'FichasController@setEmpregos');
Route::get('fichas/empregos/{id}/delete', 'FichasController@destroyEmpregos');

Route::get('fichas/parentes/{id}', 'FichasController@getParentes');
Route::post('fichas/parentes/{id}', 'FichasController@setParentes');
Route::get('fichas/parentes/{id}/delete', 'FichasController@destroyParentes');

Route::get('fichas/setors/{id}', 'FichasController@getSetors');
Route::post('fichas/setors/{id}', 'FichasController@setSetors');
Route::get('fichas/setors/{id}/delete', 'FichasController@destroySetors');

Route::post('buscaRg', 'FichasController@buscaRg');

Route::get('importar', 'ImportarController@importar');

Route::resource('ficha_instrucaos', 'Ficha_instrucaosController');

Route::resource('ficha_empregos', 'Ficha_empregosController');

Route::resource('ficha_cursos', 'Ficha_cursosController');

Route::resource('ficha_parentes', 'Ficha_parentesController');

Route::resource('ficha_setors', 'Ficha_setorsController');