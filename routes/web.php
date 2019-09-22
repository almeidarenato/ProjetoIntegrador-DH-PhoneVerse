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
    return view('frontend.landing');
});

Route::post('/respostas', 'QuestionarioController@cadastrar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/top3', function () {
    return view('top_page');
});

Route::get('/admin', function () {
    return view('admin.main');
});

// CRUD Marcas
Route::get('/admin/marcas', 'marcaController@listandoMarcas');
Route::get('/admin/marcas/{salvo}', 'marcaController@listandoMarcas');
Route::post('/admin/marcas/adicionar', 'marcaController@salvandoMarca');
Route::post('/admin/marcas/alterar/{id}', 'marcaController@modificandoMarca');
Route::delete('/admin/marcas/excluir/{id}', 'marcaController@removendoMarca');

// CRUD Memoria Interna
Route::get('/admin/memint', 'memoriaInternaController@listandoMemoriaInterna');
Route::get('/admin/memint/{salvo}', 'memoriaInternaController@listandoMemoriaInterna');
Route::post('/admin/memint/adicionar', 'memoriaInternaController@salvandoMemoriaInterna');
Route::post('/admin/memint/alterar/{id}', 'memoriaInternaController@modificandoMemoriaInterna');
Route::delete('/admin/memint/excluir/{id}', 'memoriaInternaController@removendoMemoriaInterna');

// CRUD Memoria Ram
Route::get('/admin/memram', 'memoriaRamController@listandoMemoriaRam');
Route::get('/admin/memram/{salvo}', 'memoriaRamController@listandoMemoriaRam');
Route::post('/admin/memram/adicionar', 'memoriaRamController@salvandoMemoriaRam');
Route::post('/admin/memram/alterar/{id}', 'memoriaRamController@modificandoMemoriaRam');
Route::delete('/admin/memram/excluir/{id}', 'memoriaRamController@removendoMemoriaRam');
