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


Route::get('/', 'BasicController@index');

Route::get('/team', 'BasicController@team');

Route::get('/manage', 'UsuarioController@index');
Route::get('/manage/noticias', 'NoticiaController@index');
Route::get('/manage/eventos', 'EventoController@index');
Route::get('/manage/basic', 'BasicController@edit');
Route::get('/manage/promos', 'PromocionController@index');
Route::get('/manage/grupos', 'GrupoController@index');

Route::get('/manage/noticia/create', 'NoticiaController@create');
Route::post('/manage/noticias', 'NoticiaController@store');


Route::get('/manage/evento/create', 'EventoController@create');
Route::post('/manage/eventos', 'EventoController@store');

Route::post('/manage/basics/update', 'BasicController@store');

Route::get('/manage/grupo/create', 'GrupoController@create');
Route::post('/manage/grupos', 'GrupoController@store');
Route::get('/manage/grupo/{grupo}', 'GrupoController@show');


Route::get('/manage/promos/create', 'PromocionController@create');
Route::post('/manage/promos', 'PromocionController@store');

Route::post('/manage/grupos/{grupo}/miembros', 'MiembroController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
