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

Route::get('/authors', 'AuthorsController@index');
Route::get('/authors/create', 'AuthorsController@create');
Route::post('/authors/create', 'AuthorsController@store');

Route::get('/books', 'BooksController@index');
Route::get('/books/create', 'BooksController@create');
Route::post('/books/create', 'BooksController@store');
Route::get('/books/{id}/edit', 'BooksController@edit');
Route::patch('/books/{id}/edit', 'BooksController@update');



