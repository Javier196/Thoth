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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/login', 'HomeController@login')->name('login.auth');
Route::get('/inicio/libros','HomeController@libros')->name('libros.inicio');
Route::get('/inicio/upload','HomeController@upload')->name('upload.inicio');
Route::get('/perfil/perfilu','HomeController@perfilu')->name('perfilu.perfil');
Route::get('/catalogo/todos_libros','HomeController@todos_libros')->name('todos_libros.catalogo');
Route::get('/catalogo/categorias','HomeController@categorias')->name('categorias.catalogo');
Route::get('/solicitudes/aprobadas','HomeController@aprobadas')->name('aprobadas.solicitudes');
Route::get('/solicitudes/pendientes','HomeController@pendientes')->name('pendientes.solicitudes');
Route::get('/solicitudes/enviadas','HomeController@enviadas')->name('enviadas.solicitudes');
Route::post('/solicitudes/guardar','HomeController@save')->name('guardar.save');
Route::get('/inicio/libros/filtro/{id}','HomeController@filtro')->name('categorias.filtro');
Route::get('/solicitudes/nueva-solicitud/{id}','HomeController@nuevasol')->name('newsol.solicitudes');
Route::get('/solicitudes/nuevo/{id}/{id2}','HomeController@nuevo')->name('nuevo.solicitudes');
Route::get('/solicitudes/ver/{id}','HomeController@ver')->name('ver.solicitudes');
Route::get('/solicitudes/ver/rechazar/{id}/{id2}','HomeController@rechazar')->name('rechazar.solicitudes');
Route::get('/solicitudes/aprobadas/chat', 'ChatController@index')->name('chat.solicitudes');
