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

Route::get('/artigo', 'ArtigoController@index');
Route::get('/artigo/novo', 'ArtigoController@create');
Route::get('/artigo/{artigo}', 'ArtigoController@show');
Route::get('/artigo/{artigo}/editar', 'ArtigoController@edit');

Route::get('/usuario/{usuario}', 'UsuarioController@show');