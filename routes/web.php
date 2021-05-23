<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\layoutController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\productController;
use App\Http\Controllers\usersController;
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

//Home
Route::get('/', [homeController::class,'index'])->name('home');


//Products
Route::get('/product/{product:id}',[productController::class,'index'])->name('product');

Route::get('/category/{category:id}',[categoryController::class,'index'])->name('category');


//Auth
Route::get('/register', [registerController::class,'index'])->name('register');
Route::post('/register', [registerController::class, 'store']);

Route::get('/login', [loginController::class,'index'])->name('login');
Route::post('/login', [loginController::class, 'store']);

Route::get('/logout', [logoutController::class,'store'])->name('logout');


Route::get('/about', function(){
        return view('about');
});


//Admin
Route::get('/admin',[adminController::class,'index'])->name('adminIndex');
Route::get('/admin_manage' , [adminController::class, 'manage'])->name('admin_manage');
Route::get('/admin_manage_orders' , [adminController::class, 'manage_orders'])->name('admin_manageOrders');

Route::post('/admin_product',[adminController::class,'add_product'])->name('adminAddProduct');
Route::post('/admin_product_del',[adminController::class,'delete_product'])->name('adminDeleteProduct');

Route::post('/admin_category',[adminController::class,'add_category'])->name('adminAddCategory');




//Orders
Route::get('/cart',[orderController::class, 'index'])->name('cart')->middleware(['auth']);
Route::post('/cart/{product:id}',[orderController::class, 'store']);

Route::get('/checkout' , [checkoutController::class,'index'])->name('checkout');
//Route::get('/confirm_chekout',[checkoutController::class,'confirm'])->name('confirm_checkout');
Route::post('/confirm_checkout',[checkoutController::class,'store'])->name('confirm_checkout');

Route::get('/confirm_checkout',[checkoutController::class,'index_place_order'])->name('place_order');
Route::post('/place_order',[checkoutController::class,'place_order'])->name('place_order');

Route::post('/layout/{order:id}' , [layoutController::class, 'delete'])->name('layout');

//User 
Route::get('/profile/edit' , [usersController::class,'edit'])->name('profile_edit');
Route::get('/profile' , [usersController::class,'index'])->name('profile');
Route::post('/profile' , [usersController::class,'update']);









