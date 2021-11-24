<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
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

Route::get('/{any}', function() {
    return view('app');
})->where('any', '.*');

// Route::group(['prefix' => 'blogs'], function() {
//     Route::get('', 'BlogController@index')->name('blogs.index');
//     Route::get('create', 'BlogController@create')->name('blogs.create');
//     Route::post('store', 'BlogController@store')->name('blogs.store');
//     Route::get('edit', 'BlogController@edit')->name('blogs.edit');
//     Route::post('update', 'BlogController@update')->name('blogs.update');
//     Route::post('delete', 'BlogController@destroy')->name('blogs.delete');
// });
