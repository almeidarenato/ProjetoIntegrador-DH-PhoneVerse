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

Route::get('/admin/marcas', function () {
    return view('admin.marcas');
});
