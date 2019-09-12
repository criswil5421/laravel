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

Route::get('cliente/save',"ClienteController@save");
Route::get('cliente/index',"ClienteController@index");
Route::get('cliente/update',"ClienteController@update");
Route::get('cliente/delete',"ClienteController@delete");
Route::get('cliente/update2',"ClienteController@update2");

Route::get('cliente/show/{id}',"ClienteController@show");