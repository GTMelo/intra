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
Route::get('/noticia/{artigo}', 'NoticiaController@show');
Route::get('/pagina/{artigo}', 'PaginaController@show');
Route::get('/perfil/{usuario}', 'UsuarioController@show');