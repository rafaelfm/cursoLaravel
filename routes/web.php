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
    return view('welcome');
});

/*
// Chamando funções
Route::get('/contato/{id?}', function ($id = null) {
    return "contato id = ".$id;
});

Route::post('/contato', function () {
    dd($_POST);
    return "contato post";
});

Route::put('/contato', function () {
    return "contato put";
});
*/

// Chamando Controllers
Route::get('/contato/{id?}', ['uses' => 'ContatoController@index']);
Route::post('/contato', ['uses' => 'ContatoController@criar']);
Route::put('/contato', ['uses' => 'ContatoController@editar']);
