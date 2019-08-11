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
    return view('posts.contentblog');
});

Route::get('admin/routes', 'HomeController@admin')->middleware('admin');

// Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/actor', 'ActorController@index')->name('actor.index');

Route::get('/actor/formstaff', 'ActorController@formstaff')->name('actor.formstaff');

Route::get('/upload', 'FilesController@index')->name('upload');

Route::get('posts/{post}/get', 'PostsController@get')->name('posts.get');

Route::get('actor/{post}/editstaff', 'ActorController@editstaff')->name('actor.editstaff');

Route::post('actor/get', 'ActorController@get')->name('actor.get');

Route::post('actor/editstaff', 'ActorController@editstaff')->name('actor.editstaff');

Route::post('subject/get', 'SubjectController@get')->name('subject.get');

Route::post('subject/store', 'SubjectController@store')->name('subject.store');

Route::post('subject/destroy', 'SubjectController@destroy')->name('subject.destroy');

Route::post('posts/testpost', 'PostsController@testpost')->name('posts.testpost');

Route::post('posts/store', 'PostsController@store')->name('posts.store');

Route::post('posts/get', 'PostsController@get')->name('posts.get');

Route::post('posts/edit', 'PostsController@edit')->name('posts.edit');

Route::post('posts/update', 'PostsController@update')->name('posts.update');

Route::post('posts/show', 'PostsController@show')->name('posts.show');

Route::post('posts/destroy', 'PostsController@destroy')->name('posts.destroy');

Route::post('actor/store', 'ActorController@store')->name('actor.store');

Route::resource('posts', 'PostsController');

Route::resource('files', 'FilesController');

Route::resource('subject', 'SubjectController');

Route::resource('actor', 'ActorController');

Auth::routes();

Route::get('/helper-user', function () {
    return UserHelp::get_username(1);
});