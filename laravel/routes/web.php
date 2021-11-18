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

//Route::get('/{any}', function() {
//    return view('app');
//})->where('any', '.*');

//Thay đổi ngôn ngữ
Route::get('lang/{locale}', function($locale)
{
    if(! in_array($locale, ['en', 'vi'])) {
        abort(404);
    }
    session()->put('locale',  $locale);
    return redirect()->back();
});


Route::resource('/blog', \App\Http\Controllers\BlogController::class);

//Delete all
Route::delete('/selected-blogs', [BlogController::class, 'deleteCheckedBlogs'])->name('blog.deleteSelected');
