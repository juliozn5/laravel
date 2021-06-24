<?php

use App\Http\Controllers\VacanteController;
use App\Models\Vacante;
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



Auth::routes(['verify'=>true]);


//Rutas protegidas
Route::group(['middleware'=>['auth', 'verified']], function(){

    //Rutas de las vacantes

Route::get('/vacantes', 'App\Http\Controllers\VacanteController@index')->name('vacantes.index');
Route::get('/vacantes/create', 'App\Http\Controllers\VacanteController@create')->name('vacantes.create');
Route::post('/vacantes', 'App\Http\Controllers\VacanteController@store')->name('vacantes.store');
Route::delete('vacantes/{vacante}', 'App\Http\Controllers\VacanteController@destroy')->name('vacantes.destroy');
Route::get('/vacantes/{vacante}/edit', 'App\Http\Controllers\VacanteController@edit')->name('vacantes.edit');
Route::put('/vacantes/{vacante}', 'App\Http\Controllers\VacanteController@update')->name('vacantes.update');
// Subir Imagenes

Route::post('/vacantes/imagen', 'App\Http\Controllers\VacanteController@imagen')->name('vacantes.imagen');
Route::post('/vacantes/borrarimagen', 'App\Http\Controllers\VacanteController@borrarimagen')->name('vacantes.borrar');

//Cambiar estado de la vacante

Route::post('/vacantes/{vacante}',  'App\Http\Controllers\VacanteController@estado')->name('vacantes.estado');

//Notificaciones
Route::get('/notificaciones', 'App\Http\Controllers\NotificacionesController')->name('notificaciones');
});

//Pagina de inicio
Route::get('/', 'App\Http\Controllers\InicioController')->name('inicio');
//categorias
Route::get('/categorias/{categoria}', 'App\Http\Controllers\CategoriaController@show')->name('categorias.show');

//Eviar datos a la vacante
Route::get('/candidatos/{id}', 'App\Http\Controllers\CandidatoController@index')->name('candidatos.index');
Route::post('/candidatos/store', 'App\Http\Controllers\CandidatoController@store')->name('candidatos.store');

//Muestra los trabajos en el fron end sin autenticacion
Route::get('/busqueda/buscar', 'App\Http\Controllers\VacanteController@resultados')->name('vacantes.resultados');
Route::post('/busqueda/buscar', 'App\Http\Controllers\VacanteController@buscar')->name('vacantes.buscar');
Route::get('/vacantes/{vacante}', 'App\Http\Controllers\VacanteController@show')->name('vacantes.show');


