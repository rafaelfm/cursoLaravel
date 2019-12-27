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
    return view('home');
});
Route::get('/',['as' => "site.home","uses" => "Site\HomeController@index"]);

Route::get('/login',['as' => "site.login","uses" => "Site\LoginController@index"]);
Route::post('/entrar',['as' => "site.entrar","uses" => "Site\LoginController@entrar"]);
Route::get('/logout',['as' => "site.sair","uses" => "Site\LoginController@sair"]);



Route::group(['middleware' => 'auth'], function (){
    //tela
    Route::get('/admin/cursos',['as' => "admin.cursos","uses" => "Admin\CursoController@index"]);
    // tela
        Route::get('/admin/cursos.adicionar',['as' => "admin.cursos.adicionar","uses" => "Admin\CursoController@adicionar"]);
    //acao
        Route::post('/admin/cursos.salvar',['as' => "admin.cursos.salvar","uses" => "Admin\CursoController@salvar"]);
    //tela
        Route::get('/admin/cursos.editar/{id}',['as' => "admin.cursos.editar","uses" => "Admin\CursoController@editar"]);
    //acao
        Route::put('/admin/cursos.atualizar/{id}',['as' => "admin.cursos.atualizar","uses" => "Admin\CursoController@atualizar"]);
    // tela
        Route::get('/admin/cursos.deletar/{id}',['as' => "admin.cursos.deletar","uses" => "Admin\CursoController@deletar"]);
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
