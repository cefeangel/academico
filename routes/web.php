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

Route::get('/curso/novo','CursoController@novo');
Route::post('/curso/adiciona','CursoController@adiciona');
Route::get('/curso/detalhe/{id}','CursoController@detalhe')
        ->where('id','[0-9]+');
Route::get('curso/remove/{id}','CursoController@remove')
        ->where('id','[0-9]+');
Route::get('/cursos','CursoController@lista');

Route::get('curso/editar/{id}','CursoController@editar')
        ->where('id','[0-9]+');
Route::post('/curso/atualizar','CursoController@atualizar');

Route::get('/aluno/novo','AlunoControler@novo');