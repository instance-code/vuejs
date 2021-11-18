<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\LanguageController;
use App\Models\Blog;
use Illuminate\Support\Facades\App;
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
// --------------------------------
// Route::get('/{any}', function() {
//     return view('app');
// })->where('any', '.*');
// --------------------------------


// blog
Route::prefix('blog')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('blogs.index');
    Route::get('/create', [BlogController::class, 'create'])->name('blogs.create');
    Route::get('/edit/{id}', [BlogController::class, 'edit'])->name('blogs.edit');
    Route::post('/store', [BlogController::class, 'store'])->name('blogs.store');
    Route::post('/update/{id}', [BlogController::class, 'update'])->name('blogs.update');
    Route::get('/delete/{id}', [BlogController::class, 'delete'])->name('blogs.delete');
});

Route::get('lang/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'vi'])) {
        abort(404);
    }
    session()->put('locale', $locale);
    return redirect()->back();
});
