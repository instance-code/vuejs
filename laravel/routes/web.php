<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\App;
// use Illuminate\Support\Facades\Request;
// use Illuminate\Support\Facades\Session;
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

// Route::get('/{any}', function () {
//     return view('app');
// })->where('any', '.*');
Route::get('language/{locale}', function ($locale) {
    \App::setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->name('language');

Route::group(['middleware' => 'locale'], function () {
    Route::get('index', [App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');
    Route::get('edit/{id}', [App\Http\Controllers\BlogController::class, 'edit'])->name('blog.post.edit');
    Route::put('update/{id}', [App\Http\Controllers\BlogController::class, 'update'])->name('blog.post.update');
    Route::post('deleteAll', [App\Http\Controllers\BlogController::class, 'deleteAll'])->name('blog.post.deleteAll');
    Route::get('index/delete/{id}', [App\Http\Controllers\BlogController::class, 'destroy'])->name('blog.post.delete');
});
