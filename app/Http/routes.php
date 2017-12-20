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


/*
Route::get('/', [
	'as' => 'front.index',
	'uses' => 'FrontController@index'


]);
*/

Route::group(['prefix'=>'/'], function(){
	
	Route::get('/',['as' => 'front.index', function () {
    return view('front.index');
	}]);

	Route::resource('programas', 'ProgramasController');
	Route::get('programas/{id}/destroy',[
		'uses' => 'ProgramasController@destroy',
		'as'   => 'programas.destroy'
	]);


});


Route::get('/2', function () {
    return view('front.index2');
});

Route::get('/3', function () {
    return view('front.index3');
});

Route::get('/4', function () {
    return view('front.index4');
});

Route::get('/5', function () {
    return view('front.index5');
});

Route::get('/6', function () {
    return view('front.index6');
});

	Route::resource('front', 'FrontController');
	Route::get('front/{id}/destroy',[
		'uses' => 'FrontController@destroy',
		'as'   => 'Front.destroy'
	]);

	Route::get('/disparador', [
	'as' => 'front.disparador',
	'uses' => 'FrontController@disparador'
	]);



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

	Route::get('riegohistorial/{id}/nuevo',[
		'uses' => 'RiegoHistorialController@nuevo',
		'as'   => 'riegohistorial.nuevo'
	]);

	Route::resource('valvulas', 'ValvulasController');
	Route::get('valvulas/{id}/destroy',[
		'uses' => 'ValvulasController@destroy',
		'as'   => 'valvulas.destroy'
	]);

