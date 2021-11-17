<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use PhpParser\Builder\Class_;
use App\Http\Middleware\ktra;

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

//http:/localhost:8000/vn/lang -> tiếng việt
//http:/localhost:8000/en/lang -> tiếng anh
//http:/localhost:8000/es/lang -> tiếng tây ban nha
// Route::get("/{lang}/lang", function ($lang) {
//     session(['lang' => $lang]);
//     $s_lang = session('lang', 'cn');

//     echo 'AAAA:' . $s_lang;
// });



Route::get('/welcome/{lang}', function ($lang) {
    App::setLocale($lang);
    session(['lang' => $lang]);
    return redirect()->route('class.index');
});

Route::get('/helo/{lang}', function ($lang) {
    App::setLocale($lang);
    session(['lang' => $lang]);
    return redirect()->back();
});

Auth::routes();


// Route::group(['prefix' => '{locale}'], function () {
//     // Route::get('/', function () {
//     //     return view('welcome');
//     // })->middleware('lang');

//     Route::post('/alo', [\App\Http\Controllers\ClassController::class, 'index']);
//     //Route::get('/user', [\App\Http\Controllers\ClassController::class, 'index'])->middleware('lang');
// });
Route::resource("class", ClassController::class)->middleware('lang');
Route::post("/delete-all", [ClassController::class, 'Detele_all'])->name('deleteall');
Route::get("/xoa/{id}", [ClassController::class, 'delete'])->name('xoa');
