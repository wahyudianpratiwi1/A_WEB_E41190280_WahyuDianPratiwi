<?php

use App\Http\Middleware\CheckAge;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routest
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/', function () {
})->middleware('web');

Route::group(['middleware'=>['web']], function(){

});
Route::middleware(['web','subscribed'])->group(function(){

});



Auth::routes();
Route::get('admin/profile',function(){


Route::put('post/{id}', function ($id) {
    
})->middleware('role:editor');

})->middleware('auth');
Route::get('admin/profile', function () {
    
})->middleware(CheckAge::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
