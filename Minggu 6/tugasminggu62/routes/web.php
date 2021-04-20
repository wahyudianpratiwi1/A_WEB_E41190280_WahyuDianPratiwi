<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
Route::middleware(['auth'])->group(function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class,'index'])->name('home');
    Route::middleware(['admin'])->group(function(){
        Route::get('admin', [AdminController::class,'index']);
    });
    Route::middleware(['user'])->group(function(){
        Route::get('user', [UserController::class,'index']);
    });
    Route::get('/logout', function () {
        Auth::logout();
        redirect('/');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
