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




Route::get('/about','pagesController@about' );

Route::get('/','pagesController@index' );

Route::get('/prolanguage','pagesController@prolanguage' );

Route::resource('posts','postsController' );


Route::post('/' , 'PostsController@store' );




Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
