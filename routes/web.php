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

Route::get('/', 'PagesController@index');
Route::get('sobre', 'PagesController@sobre');
Route::get('contato', 'PagesController@contato');
Route::get('search', 'PagesController@search');

Route::get('posts/{post}', 'PostsController@genericPost');
