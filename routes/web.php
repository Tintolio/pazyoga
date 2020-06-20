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

Route::put('/update','AdminController@update')->name('update');

Route::get('/verVideos','AdminController@verVideos')->name('verVideos');


//S3//
Route::get('/subVideo','AdminController@subVideo')->name('subVideo');
Route::post('/subirVideo','AdminController@store')->name('subirVideo');

Route::put('/updateUser','AdminController@updateuser')->name('updateUser');

Route::get('/edit/{id}','AdminController@edit')->name('edit');

Route::delete('/elim/{id}', 'AdminController@destroy')->name('elim');
//// rutas del administrador ///

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//rutas del alumno /////


Route::get('/dashboardAlum','AlumController@index')->name('dashboardAlum');

Route::get('/alumPerfil','AlumController@index')->name('alumPerfil');



//rutas del usuario 



//rutas Alumnos//

Route::get('/dashboardAlum','AlumController@index')->name('dashboardAlum');

Route::put('/updateAlu','AlumController@update')->name('updateAlu');


//rutas de prueba 
Route::view('/barra', 'admin.barra_progreso');