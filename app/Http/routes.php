<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('front.index');
});

Route::get('/2', function () {
    return view('front.index2');
});


	Route::resource('bombas', 'BombasController');
	Route::get('bombas/{id}/destroy',[
		'uses' => 'BombasController@destroy',
		'as'   => 'bombas.destroy'
	]);


	Route::resource('programas', 'ProgramasController');
	Route::get('programas/{id}/destroy',[
		'uses' => 'ProgramasController@destroy',
		'as'   => 'Programas.destroy'
	]);


	Route::resource('riegohistorial', 'RiegoHistorialController');
	Route::get('riegohistorial/{id}/destroy',[
		'uses' => 'RiegoHistorialController@destroy',
		'as'   => 'riegohistorial.destroy'
	]);


	Route::resource('valvulas', 'ValvulasController');
	Route::get('valvulas/{id}/destroy',[
		'uses' => 'ValvulasController@destroy',
		'as'   => 'valvulas.destroy'
	]);

