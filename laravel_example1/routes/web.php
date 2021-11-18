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

Route::get('post', 'PostController@index')->name('post');
Route::get('language{lang}', 'PostController@setLanguage')->name('language');
Route::get('delete/{id}', 'PostController@destroy')->name('destroy');
Route::get('edit/{id}', 'PostController@edit')->name('edit');
Route::post('update/{id}', 'PostController@update')->name('update');