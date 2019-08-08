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

Route::get('/index', function () {
    return view('index');
});

Route::get('/news', function () {
    return view('contentblog');
});

Route::get('admin/routes', 'HomeController@admin')->middleware('admin');

// Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/upload', 'FilesController@index')->name('upload');

Route::get('posts/{post}/get', 'PostsController@get')->name('posts.get');

Route::get('posts/testget', 'PostsController@testget')->name('posts.testget');

Route::post('subject/get', 'SubjectController@get')->name('subject.get');

Route::post('posts/testpost', 'PostsController@testpost')->name('posts.testpost');

Route::post('files/store', 'FilesController@store')->name('files.store');

Route::post('posts/store', 'PostsController@store')->name('posts.store');

Route::post('posts/get', 'PostsController@get')->name('posts.get');

Route::post('posts/edit', 'PostsController@edit')->name('posts.edit');

Route::post('posts/update', 'PostsController@update')->name('posts.update');

Route::post('posts/show', 'PostsController@show')->name('posts.show');

Route::post('posts/destroy', 'PostsController@destroy')->name('posts.destroy');

Route::resource('posts', 'PostsController');

Route::resource('files', 'FilesController');

Route::resource('subject', 'SubjectController');

Auth::routes();

Route::get('/helper-user', function () {
    return UserHelp::get_username(1);
});