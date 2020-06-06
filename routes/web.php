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

Route::view('/admindash','dashboardAdmin');


//Route::view('/dashboardAdmin', 'admin/dashboardAdmin') -> name ('admindashboard');

Route::resource('usuarios','UsersController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


