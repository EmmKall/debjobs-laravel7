<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

//Rutas de Vacantes
Route::get('/vacantes', 'VacanteController@index')->name('vacantes.index');
Route::get('/vacantes/create', 'VacanteController@create')->name('vacantes.create');

Route::post('/vacantes/imagen', 'VacanteController@imagen')->name('vacantes.imagen');
Route::post('vacantes/borrarimg', 'VacanteController@borrarimg')->name('vacantes.borrarimg');