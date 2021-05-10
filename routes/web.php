<?php

use App\Http\Controllers\registerController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\logoutController;
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


Route::get('/', [homeController::class,'index'])->name('home');

Route::get('/category', function () {
    return view('category');
});


Route::get('/product', function(){
        return view('product');
});


Route::get('/register', [registerController::class,'index'])->name('register');
Route::post('/register', [registerController::class, 'store']);

Route::get('/login', [loginController::class,'index'])->name('login');
Route::post('/login', [loginController::class, 'store']);

Route::get('/logout', [logoutController::class,'store'])->name('logout');


Route::get('/about', function(){
        return view('about');
});


















