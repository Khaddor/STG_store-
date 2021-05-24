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





//ADMIN
Route::get('/admin',[adminController::class,'dashboard_index'])->name('admin_dashboard');
Route::get('/admin_products',[adminController::class,'products_index'])->name('admin_products');
Route::get('/admin_categories',[adminController::class,'categories_index'])->name('admin_categories');
Route::get('/admin_orders',[adminController::class,'orders_index'])->name('admin_orders');

Route::get('/admin_clients',[adminController::class,'clients_index'])->name('admin_clients');

Route::get('/admin_add_product',[adminController::class,'add_product_index'])->name('admin_add_product');
Route::post('/admin_add_product',[adminController::class,'add_product'])->name('admin_add_product');
Route::post('/admin_delete_product',[adminController::class,'delete_product'])->name('admin_delete_product');

Route::get('/admin_add_category',[adminController::class,'add_category_index'])->name('admin_add_category');
Route::post('/admin_add_category',[adminController::class,'add_category'])->name('admin_add_category');


