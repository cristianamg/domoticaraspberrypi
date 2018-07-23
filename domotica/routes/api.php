<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//ruta para aobtener todos los elementos de la base datos
Route::get('domotica','DomoticaController@getAll') ->name('getAllDomotica');
//ruta para agregar elementos a la base datos
Route::post('domotica','DomoticaController@add') ->name('addDomotica');

//ruta para aobtener un elemento de la base datos
Route::get('domotica/{id}','DomoticaController@get') ->name('getDomotica');

//ruta para modificar un elemento de la base datos
Route::post('domotica/{id}','DomoticaController@edit') ->name('editDomotica');

//ruta para elimitar
Route::post('domotica/delete/{id}','DomoticaController@delete') ->name('deleteDomotica');
