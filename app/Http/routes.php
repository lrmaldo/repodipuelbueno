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

//Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');


//Route::resource('/','FrontController');
Route::get('/contacto','FrontController@contacto');


//eventos 
//Route::get('/','EventosController@create');
Route::resource('/eventos','EventosController');
Route::post('eventos/store','EventosController@store');




//registo
Route::resource('/registro','RegistroController');

Route::post('/registro/store','RegistroController@store');


////inscripciones
Route::resource('/','FrontController@inscripciones');

///Usuario


Route::resource('usuario','UsuarioController');
Route::post('/usuario/store','UsuarioController@store');

//Route::post('/usuario/update','UsuarioController@update');
//Router::post('/usuario/edit','UsuarioController@edit');
//controlador de dashboard
Route::resource('dashboard','DashboardController');
Route::get("/login",'DashboardController@login');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
