<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BookedProductController;

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

Route::get('/',[HomeController::class,'home']);
Route::get('/home',[HomeController::class,'home'])->name('home');
Route::get('/specialOffer',[HomeController::class,'specialOffer'])->name('specialOffer');
Route::get('/delivery',[HomeController::class,'delivery'])->name('delivery');

Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/cart',[HomeController::class,'cart'])->name('cart');
Route::get('/productView/{id}',[HomeController::class,'productView'])->name('productView');
Route::get('/user/login',[HomeController::class,'user_login'])->name('user_login');
Route::post('/user/login',[HomeController::class,'loginCheck'])->name('loginCheck');
Route::post('/user/register',[HomeController::class,'user_store'])->name('user_store');
Route::get('/user/logout',[HomeController::class,'logout'])->name('user_logout');
Route::get('/user/payment',[HomeController::class,'payment'])->name('user_payment');
Route::get('/user/thanku',[HomeController::class,'thanku'])->name('user_thanku');

//ROUTE FOR ADMIN PANEL
Route::get('/admin/login',[AdminController::class,'login'])->name('admin.login');
Route::post('/admin/login',[AdminController::class,'makeLogin'])->name('admin.makeLogin');


Route::group(['middleware' =>'auth'],function(){
    Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
    Route::get('/admin/logout',[AdminController::class,'logout'])->name('admin.logout');

    // Category route
    Route::get('/categories',[CategoryController::class,'index'])->name('category.list');
    Route::get('/category/add',[CategoryController::class,'create'])->name('category.create');
    Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');
    Route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
    Route::post('/category/edit/{id}',[CategoryController::class,'update'])->name('category.update');
    Route::get('/category/delete',[CategoryController::class,'destroy'])->name('category.delete');

    //PRODUCT ROUTE
    Route::get('/products',[ProductController::class,'index'])->name('product.list');
    Route::get('/product/create',[ProductController::class,'create'])->name('product.create');
    Route::post('/product/create',[ProductController::class,'store'])->name('product.store');
    Route::get('/product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
    Route::post('/product/edit/{id}',[ProductController::class,'update'])->name('product.update');
    Route::get('/product/delete/{id}',[ProductController::class,'destroy'])->name('product.delete');
    Route::get('/product/details/{id}',[ProductController::class,'extraDetails'])->name('product.extraDetails');
    Route::post('/product/details/{id}',[ProductController::class,'extraDetailsStore'])->name('product.extraDetailsStore');

//   ROUTE OF  SHOW THE USER DETAILS IN ADMIN PANEL
    Route::get('/admin/users',[UserController::class,'index'])->name('admin.users');
   
    

});
//ROUTE OF ADD TO CART
    
Route::post('/cart/store',[CartController::class,'store'])->name('cart.store');
 
//ROUTE FOR BOOKED PRODUCT
// Route::get('/bookedproduct',[CategoryController::class,'index'])->name('booked.list');
Route::get('/booked/add',[BookedProductController::class,'create'])->name('booked.create');
Route::post('/booked/store',[BookedProductController::class,'store'])->name('booked.store');