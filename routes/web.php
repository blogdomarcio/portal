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
Route::get('/home', 'HomeController@index');
  Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/usuarios', 'Admin\UsuarioController@index')->name('admin.usuarios');
    Route::get('/mensagens', 'Admin\UsuarioController@index')->name('admin.mensagens');
    Route::get('/clientes', 'Admin\UsuarioController@index')->name('admin.clientes');

    Route::post('/usuarios/post', 'Admin\UsuarioController@post')->name('admin.usuarios.post');
    Route::get('/usuarios/ler', 'Admin\UsuarioController@ler')->name('admin.usuarios.ler');
    Route::get('/usuarios/getEdit', 'Admin\UsuarioController@getEdit')->name('admin.usuarios.getEdit');
  });

Route::get('/jquery', 'JqueryController@index')->name('jquery');