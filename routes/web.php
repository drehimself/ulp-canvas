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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/blog', 'PostsController@index')->name('posts.index');
Route::get('/{slug}', 'PostsController@show')->name('posts.show');

Route::get('tag/{slug}', 'PostsController@getPostsByTag')->name('tag.posts.index');
