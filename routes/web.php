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

Route::get('/article', 'ArticleController@index');
// Route::get('/home', 'ArticleController@index');

Route::get('/article/{id}', 'ArticleController@show');

Route::get('/articles/create', 'ArticleController@create');

Route::post('/articles', 'ArticleController@store');

Route::post('/article/{article}/comment', 'CommentController@store');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
