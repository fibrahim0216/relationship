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

Route::get('/users', 'userController@index');
Route::get('/users/create', 'userController@create');
Route::post('/users/create', 'userController@store');
Route::get('/users/{id}/profile', 'userController@show');
Route::get('/profiles', 'profilesController@index');


Route::get('/users/{id}/edit', 'userController@edit');
Route::patch('/users/{id}/edit', 'userController@update');
//Route::get('/users/{id}/delete', 'userController@destroy');