<?php

use Illuminate\Support\Facades\Route;
// can not use namespace already use
// use App\Http\Controllers\Admin\DashBoardController;
// use App\Http\Controllers\Author\DashBoardController;

use App\Http\Middleware\AuthorMiddleware;
use App\Http\Middleware\AdminMiddleware;

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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['as'=>'admin.','prefix'=>'admin','middleware'=>['auth','admin']], function(){

    Route::get('/dashboard',[App\Http\Controllers\Admin\DashBoardController::class, 'index'])->name('dashboard');
    Route::get('/index',function(){
        return view('website.index');
    });

});

Route::group(['as'=>'author.','prefix'=>'author','middleware'=>['auth','author']], function(){

    Route::get('/dashboard',[App\Http\Controllers\Author\DashBoardController::class, 'index'])->name('dashboard');

}); 