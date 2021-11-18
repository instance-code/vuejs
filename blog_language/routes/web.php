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

Route::get('/', function () {
    return view('welcome');
});

// Route::resource('/blog','Blog\BlogController');

Route::get('/blog/{locale}','Blog\BlogController@index')->name('blog.index');
Route::post('/blog','Blog\BlogController@store')->name('blog.store');
Route::get('/blog/create','Blog\BlogController@create')->name('blog.create');
Route::get('/blog/{blog}','Blog\BlogController@show')->name('blog.show');
Route::put('/blog/{blog}','Blog\BlogController@update')->name('blog.update');
Route::delete('/blog/{blog}','Blog\BlogController@destroy')->name('blog.destroy');
Route::get('/blog/{blog}/edit','Blog\BlogController@edit')->name('blog.edit');


Route::delete('/blog-selected','Blog\BlogController@deleteSelected')->name('blog.delSelected');