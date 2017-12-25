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

Route::get('/articles', 'ArticleController@index')->name('main');
Route::get('/', 'ArticleController@index')->name('main');

Route::get('/article/{article}', 'ArticleController@show');

Route::get('/articles/create', 'ArticleController@create');

Route::post('/articles', 'ArticleController@store');

Route::post('/article/{article}/comment', 'CommentController@store');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Registration Controller
Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');


//Sessions Contoller
Route::get('/login', 'SessionsController@create');

Route::get('/login', 'SessionsController@store');

Route::get('/logout', 'SessionsController@destory');

