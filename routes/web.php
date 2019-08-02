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
    return view('example');
});

// Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('posts/createpost', 'PostsController@createpost')->name('post.createpost');

Route::post('posts/store', 'PostsController@store')->name('post.store');
Route::get('posts/stores', 'PostsController@store')->name('post.store');

Route::resource('posts', 'PostsController');

Auth::routes();

Route::get('/helper-user', function () {
    return UserHelp::get_username(1);
});