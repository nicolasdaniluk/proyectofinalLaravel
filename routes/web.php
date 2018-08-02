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
Route::prefix('/productos')->group( function(){

  Route::get('agregar', 'productosControlador@agregar')->name('producto.agregar');
  Route::post('agregar', 'productosControlador@guardar');

  Route::get('listar', 'productosControlador@listar')->name('producto.listar');

  Route::get('categorias', 'productosControlador@categorias')->name('producto.categorias');
  Route::get('categorias/{nombre}', 'productosControlador@listaCategoria')->name('producto.verCategoria');


  Route::get('borrar/{id}', 'productosControlador@borrar')->name('producto.borrar');

  Route::get('editar/{id}', 'productosControlador@editar')->name('producto.editar');
  Route::post('editar/{id}', 'productosControlador@actualizar');

  Route::get('{id}', 'productosControlador@visualizar')->name('producto.ver');

});
Route::prefix('/usuarios')->group( function(){

  Route::get('agregar', 'usuariosControlador@agregar')->name('usuario.agregar');
  Route::post('agregar', 'usuariosControlador@guardar');

  Route::get('listar', 'usuariosControlador@listar')->name('usuario.listar');

  Route::get('rangos', 'usuariosControlador@rangos')->name('usuario.rangos');
  Route::get('rangos/{nombre}', 'usuariosControlador@listaRango')->name('usuario.listaRango');

  Route::get('borrar/{id}', 'usuariosControlador@borrar')->name('usuario.borrar');

  Route::get('editar/{id}', 'usuariosControlador@editar')->name('usuario.editar');
  Route::post('editar/{id}', 'usuariosControlador@actualizar');

  Route::get('{id}', 'usuariosControlador@perfil')->name('usuario.perfil');

});

Route::get('/signin', 'auth.RegisterController@register')->name('signin');

Route::get('/login', 'miControlador@login')->name('login');

Route::get('/faq', 'miControlador@faq')->name('faq');

Route::get('/', 'miControlador@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
