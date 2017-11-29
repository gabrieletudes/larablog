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
//closures

Route::get('/', 'PostsController@index')->name('home');
Route::get('/posts/month/{month}/year/{year}', 'PostsController@archives');
Route::get('/posts', 'PostsController@index');


Route::get('/posts/create', 'PostsController@create')->middleware('can:store_post,Blog\Post');
Route::post('/posts/addPost', 'PostsController@store')->middleware('can:store_post,Blog\Post');
Route::get('/posts/edit/{post}', 'PostsController@edit');
Route::post('/posts/edit/{post}', 'PostsController@update');

Route::get('/posts/{post}', 'PostsController@show');
Route::post('/comments', 'CommentsController@store')->middleware('auth');

Route::get('/login', 'SessionController@create')->name('login');
Route::post('/login', 'SessionController@authenticate');
Route::get('/logout', 'SessionController@destroy');
Route::get('/register', 'RegistrationController@register');
Route::post('/register','RegistrationController@store');