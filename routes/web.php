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

Route::get('/', 'HomeController@index');
Route::get('/teste', 'TesteController@index');

Route::get('/registrar', 'RegistrationController@create');
Route::get('/login', 'SessionsController@create');

Route::get('/artigos', 'ArtigoController@index');
Route::get('/artigos/novo', 'ArtigoController@create');
Route::post('/artigos', 'ArtigoController@store');
Route::get('/artigos/{artigo}', 'ArtigoController@show');
Route::get('/artigos/{artigo}/editar', 'ArtigoController@patch');
Route::get('/artigos/{artigo}/apagar', 'ArtigoController@delete');

Route::get('/unidade', 'UnidadeController@index');
Route::get('/unidade/novo', 'UnidadeController@create');
Route::get('/unidade/{unidade}', 'UnidadeController@show');
Route::get('/unidade/{unidade}/editar', 'UnidadeController@patch');
Route::get('/unidade/{unidade}/apagar', 'UnidadeController@delete');

Route::get('/usuario', 'UsuarioController@index');
Route::get('/usuario/{usuario}', 'UsuarioController@show');