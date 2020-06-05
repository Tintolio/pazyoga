<?php

use Illuminate\Support\Facades\Route;

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

Route::get ('/', 'PagesController@home') ->name('home');


Route::resource('mensajes','MessagesController');

Route::resource('usuarios','UsersController');

// Route::get('mensajes','MessagesController@index')->name('messages.index');
// Route::get ('mensajes/create','MessagesController@create')->name('messages.create');
// Route::post('mensajes','MessagesController@store')->name('messages.store');
// Route::get ('mensajes/{id}','MessagesController@show')->name('messages.show');
// Route::get ('mensajes/{id}/edit','MessagesController@edit')->name('messages.edit');
// Route::put ('mensajes/{id}','MessagesController@update')->name('messages.update');
// Route::delete('mensajes/{id}','MessagesController@destroy')->name('messages.destroy;

Route::get('/home', 'HomeController@index')->name('home');

Route::auth();


