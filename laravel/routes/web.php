<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\BlogController;
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
Route::pattern('id', '([0-9]+)');

// Route::get('/{any}', function() {
//     return view('app');
// })->where('any', '.*');

Route::get('lang/{locale}',function($locale) {
    if(!in_array($locale, ['en', 'vi'])) {
        abort(404);
    }
    session()->put('locale', $locale);
    return redirect()->back();
});
Route::get('/', 'BlogController@index')->name('blog.index');
Route::get('/create-{id}', 'BlogController@getCreate')->name('blog.create');
Route::post('/create-{id}', 'BlogController@postCreate')->name('blog.create');
Route::get('/del-{id}', 'BlogController@delete')->name('blog.delete');
Route::get('/deleteALl', 'BlogController@deleteAll')->name('blog.deleteAll');
