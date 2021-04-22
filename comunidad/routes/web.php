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
    return view('auth/login');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

	Route::get('/barrios/create', 'BarrioController@create')->name('barrios');

	Route::get('/ciudadanosactividades', 'CiudadanoController@show')->name('actividades.ciudadanos');

	Route::post('/barrios/create', 'BarrioController@store')->name('barrios.store');

	Route::post('/ciudadanos/create', 'CiudadanoController@store')->name('ciudadanos.store');

	Route::put('/barrios/{id}', 'BarrioController@update')->name('barrios.update');

	Route::delete('/barrios/{id}', 'BarrioController@destroy')->name('barrios.destroy');

	Route::get('/home', 'HomeController@index')->name('home');

	Route::get('/registro', 'CiudadanoController@index')->name('registro');

	Route::get('/ciudadanos', 'CiudadanoController@create')->name('ciudadanos');

	Route::put('/ciudadanos/{id}', 'CiudadanoController@update')->name('ciudadanos.update');

	Route::delete('/ciudadanos/{id}', 'CiudadanoController@destroy')->name('ciudadanos.destroy');

	Route::get('/actividades', 'ActividadeController@create')->name('actividades');

	Route::post('/actividades/create', 'ActividadeController@store')->name('actividades.store');

	Route::put('/actividades/{id}', 'ActividadeController@update')->name('actividades.update');

	Route::delete('/actividades/{id}', 'ActividadeController@destroy')->name('actividades.destroy');

	Route::get('exportar', 'CiudadanoController@exportarPdf')->name('ciudadanos.pdf');

	Route::get('certificado/{id}', 'CiudadanoController@certificadoPdf')->name('certificados.pdf');
});



