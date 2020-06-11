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



//rutas del administrador ///////
Route::get('/dashboardAdmin','AdminController@index')->name('dashboardAdmin');
//Route::resource('admindash','AdminController');

Route::get('/listaAlumn','AdminController@listar')->name('listaAlumn');

Route::get('/contentPerfil','AdminController@perfil')->name('contentPerfil');

Route::get('/verVideos','AdminController@verVideos')->name('verVideos');
Route::get('/subVideo','AdminController@subVideo')->name('subVideo');


Route::resource('administrador','AdminController');
//// rutas del administrador ///

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


