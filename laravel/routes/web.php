<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\App;
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

// Route::get('/{any}', function() {
//     return view('app');
// })->where('any', '.*'); 

Route::get('/vue', function() {
    return view('app');
});

Route::middleware(['web'])->group(function(){
    //show posts
    Route::get('/bloglist', 'BlogController@index');
    
    //change language
    Route::get('locale/{language}','ChangeLanguageController@setLang');    
    
    //edit posts
    Route::get('/bloglist/update/{id}','BlogController@edit')->name('post.edit');
    Route::post('/bloglist/update/{id}','BlogController@update')->name('post.update');

    Route::get('/bloglist/delete/{id}','BlogController@delete')->name('post.delete');
    // Route::get('/bloglist/checkbox','BlogController@deleteCheckbox')->name('post.checkbox');
});

