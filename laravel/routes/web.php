<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/{any}', function() {
//     return view('app');
// })->where('any', '.*');
Route::get('/', function () {
    return view('welcome');
});


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/profile/{lang}', function ($lang) {
//     App::setlocale($lang);
//     return view('profile');
// });
// Route::resource('/blog',BlogController::class);

Route::get('/blog',[BlogController::class,'index'])->name('blog.index');
Route::delete('/blog/{id}',[BlogController::class,'destroy'])->name('blog.destroy');
Route::get('/blog/{id}/edit',[BlogController::class,'edit'])->name('blog.edit');
Route::post('/blog/{id}',[BlogController::class,'update'])->name('blog.update');
