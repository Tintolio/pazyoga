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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/admindash','AdminController@index')->name('dashboardAdmin');
//Route::resource('admindash','AdminController');

Route::get('/lista','AdminController@listar');


Route::resource('administrador','AdminController');


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


