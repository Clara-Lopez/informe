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

Route::get('/home', 'HomeController@index')->middleware('verified');


Route::resource('informes', 'InformeController');
Route::resource('usuarios', 'UsuarioController');
Route::get('home', 'InformeController@index');
Route::resource('usuarios', 'UsuarioController');

Route::get('graficos', 'GraficoController@index');

Route::get('mapas', 'MapaController@index');