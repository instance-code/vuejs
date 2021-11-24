<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\App;
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

 Route::get('/{any}', function () {
     return view('app');
 })->where('any','.*');

Route::get('/', function(){
    return view('home');
});

Route::get('/validation', function(){
    return view('validation');
});

Route::get('/lang', function(){
    return view('lang');
})->name('lang');

Route::prefix('users')->group(function(){
    Route::post('/login',[UserController::class,'login'])->name('users.login');
});


Route::prefix('blogs')->group(function(){
    Route::get('/',[BlogController::class,'index'])->name('blogs.index');
    Route::get('/create',[BlogController::class,'create'])->name('blogs.create');
    Route::delete('/{id}',[BlogController::class,'destroy'])->name('blogs.delete');
    Route::get('/{id}',[BlogController::class,'show'])->name('blogs.show');
    Route::post('/',[BlogController::class,'store'])->name('blogs.store');
    Route::put('/{id}',[BlogController::class,'update'])->name('blogs.update');
    Route::post('/deleteByChecked',[BlogController::class,'deleteByChecked']);
   
});

Route::get('/changeLang/{lang}',function($lang){
   
    switch($lang){
        case "vi":
            $lang="vi";
            break;
        default:
            $lang="en";
            break;
        }
     session(['lang' => $lang]);
     App::setLocale(session('lang'));
     return redirect()->route('blogs.index');
})->name('changeLang');


Route::post('testHttpDelete', function(Request $request){
    return $request;
});


Route::post('/test-checkbox',function(Request $request){
    dd($request->all());
});
