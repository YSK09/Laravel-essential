<?php

use App\Http\Controllers\CobaController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/test',function() {
    return view('test');
})->name('test');

Route::get('/blog',function(){
    return view('blog');
})->name('blog');

Route::resource('/posts', PostController::class)->only(['index','show']);

Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/users',[UserController::class,'index'])->name('users.index');

    Route::get('/users/{id?}',[UserController::class,'show'])->name('users.show');
    // Route::get('/user/{id?}',function($id = null){
    //     return 'User' . $id;
    // })->name('users.show')->where('id','[0-9]+');

});
