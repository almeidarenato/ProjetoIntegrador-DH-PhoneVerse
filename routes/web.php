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

use App\Http\Controllers\aparelhoController;

Route::get('/', function () {
    return view('frontend.landing');
});

Route::get('/teste', function () {
    return view('frontend.teste');
});

Route::get('/respostas', function () {
    return view('respostas');
});

Route::post('/top3', 'QuestionarioController@cadastrar');

Route::get('/top3', 'QuestionarioController@teste');


//rota me ajude a escolher
Route::get('top3/aparelho/{aparelho}/motivo/{motivo}/usocelular/{usocelular}', 'QuestionarioController@resultados');
//rota eu sei oque estou fazendo
Route::get('/top3/precode/{precode}/precoate/{precoate}', 'QuestionarioController@resultados');
//Route::get('/top3/aparelho/{aparelho?}/motivo/{motivo?}/usocelular/{usocelular]', 'QuestionarioController@resultados');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/top3', function () {
//     return view('top_page');
// });

//Mail
Route::post('/email', 'QuestionarioController@enviaEmail');

Route::get('/produto', function () {
    return view('product');
});

Route::middleware(['auth'])->group(function () {

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

    // CRUD Slot Sim
    Route::get('/admin/slotsim', 'slotSimController@listandoslotSim');
    Route::get('/admin/slotsim/{salvo}', 'slotSimController@listandoslotSim');
    Route::post('/admin/slotsim/adicionar', 'slotSimController@salvandoslotSim');
    Route::post('/admin/slotsim/alterar/{id}', 'slotSimController@modificandoslotSim');
    Route::delete('/admin/slotsim/excluir/{id}', 'slotSimController@removendoslotSim');

    // CRUD Processador
    Route::get('/admin/processador', 'processadorController@listandoProcessador');
    Route::get('/admin/processador/{salvo}', 'processadorController@listandoProcessador');
    Route::post('/admin/processador/adicionar', 'processadorController@salvandoProcessador');
    Route::post('/admin/processador/alterar/{id}', 'processadorController@modificandoProcessador');
    Route::delete('/admin/processador/excluir/{id}', 'processadorController@removendoProcessador');

    // CRUD Sistema Operacional
    Route::get('/admin/sisop', 'sistemaOperacionalController@listandoSistemasOperacionais');
    Route::get('/admin/sisop/{salvo}', 'sistemaOperacionalController@listandoSistemasOperacionais');
    Route::post('/admin/sisop/adicionar', 'sistemaOperacionalController@salvandoSistemaOperacional');
    Route::post('/admin/sisop/alterar/{id}', 'sistemaOperacionalController@modificandoSistemaOperacional');
    Route::delete('/admin/sisop/excluir/{id}', 'sistemaOperacionalController@removendoSistemaOperacional');

    // CRUD Aparelho
    Route::get('/admin/aparelho', 'aparelhoController@listandoAparelhos');
    Route::get('/admin/aparelho/{salvo}', 'aparelhoController@listandoAparelhos');
    Route::post('/admin/aparelho/adicionar', 'aparelhoController@salvandoAparelho');
    Route::post('/admin/aparelho/alterar/{id}', 'aparelhoController@modificandoAparelho');
    Route::delete('/admin/aparelho/excluir/{id}', 'aparelhoController@removendoAparelho');

    // CRUD Respostas
    Route::get('/admin/my', 'questionarioController@listarRespostas');
    Route::get('/admin/aparelho/{salvo}', 'aparelhoController@listandoAparelhos');
    Route::post('/admin/aparelho/adicionar', 'aparelhoController@salvandoAparelho');
    Route::post('/admin/aparelho/alterar/{id}', 'aparelhoController@modificandoAparelho');
    Route::delete('/admin/aparelho/excluir/{id}', 'aparelhoController@removendoAparelho');

    // Dashboard
    Route::get('/admin', 'dashboardController@contaEntidades');
    Route::get('/admin/dashboard', 'dashboardController@contaEntidades');
});
//Informações para pagina do aparelho
Route::get('/aparelho/{id}', 'aparelhoController@encontrandoAparelho');

//Informações para top 3
Route::get('/top_page/', 'aparelhoController@encontrandoAparelho');
