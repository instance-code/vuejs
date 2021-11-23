<?php

use App\Http\Controllers\BlogController;
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
Route::get('blog/{lang}', [BlogController::class, 'setLocale'])->name('blog.lang');
Route::get('blog', [BlogController::class, 'list'])->name('blog.list');
Route::get('create_blog', [BlogController::class, 'GetCreate']);
Route::post('create_blog', [BlogController::class, 'PostCreate'])->name('post-create');
Route::get('edit_blog/{id}', [BlogController::class, 'edit'])->name('blog.edit');
Route::post('edit_blog/{id}', [BlogController::class, 'update'])->name('blog.update');
Route::get('delete_blog/{id}', [BlogController::class, 'delete'])->name('blog.delete');