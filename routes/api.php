<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*
 * Auth
 */

Route::post('register', 'Auth\AuthController@register');
Route::post('login', 'Auth\AuthController@login');
Route::post('recoverPassword', 'Auth\AuthController@recoverPassword');
Route::post('resetPassword', 'Auth\AuthController@resetPassword');


Route::post('prueba', 'PruebaController@index');
