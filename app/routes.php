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

Route::get('/', function () {
		return Redirect::to('/fichas');
	});

Route::resource('/fichas', 'FichasController');
Route::get('/fichas/informacao/{id}', 'FichasController@getInformacao');

Route::get('fichas/instrucao/{id}', ['as'  => 'fichas.instrucao', 'uses'  => 'FichasController@getInstrucao']);
Route::post('fichas/instrucao/{id}', ['as' => 'fichas.instrucao.store', 'uses' => 'FichasController@setInstrucao']);
Route::get('fichas/instrucao/{id}/delete', 'FichasController@destroyInstrucao');

Route::get('fichas/cursos/{id}', ['as' => 'fichas.curso', 'uses' => 'FichasController@getCursos']);
Route::post('fichas/cursos/{id}', 'FichasController@setCursos');
Route::get('fichas/cursos/{id}/delete', 'FichasController@destroyCursos');

Route::get('fichas/empregos/{id}', ['as' => 'fichas.emprego', 'uses' => 'FichasController@getEmpregos']);
Route::post('fichas/empregos/{id}', 'FichasController@setEmpregos');
Route::get('fichas/empregos/{id}/delete', 'FichasController@destroyEmpregos');

Route::get('fichas/parentes/{id}', ['as' => 'fichas.parente', 'uses' => 'FichasController@getParentes']);
Route::post('fichas/parentes/{id}', 'FichasController@setParentes');
Route::get('fichas/parentes/{id}/delete', 'FichasController@destroyParentes');

Route::get('fichas/setors/{id}', ['as' => 'fichas.setor', 'uses' => 'FichasController@getSetors']);
Route::post('fichas/setors/{id}', 'FichasController@setSetors');
Route::get('fichas/setors/{id}/delete', 'FichasController@destroySetors');

Route::post('buscaRg', 'FichasController@buscaRg');