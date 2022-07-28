<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;

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

Route::get('index', function () {
    return view('layout');
});
Route::get('about', function () {
    return view('about');
});
Route::get('shop', function () {
    return view('shop');
});

Route::get('login', function () {
    return view('login');
});
Route::get('signup', function () {
    return view('signup');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('checkout', function () {
    return view('checkout');
});





//Register and Login Routes 
Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);
Route::get('logoutuser' , [UserController::class,'logoutUser'])->name('logoutuser');
Route::post('contact', [UserController::class, 'contact']);






// AdminController Routes

Route::get('admin',[AdminController::class,'index']);
Route::post('admin/auth',[AdminController::class,'auth'])->name('admin.auth');

Route::group(['middleware'=>'admin_auth'],function(){
Route::get('admin/dashboard',[AdminController::class,'dashboard']);
Route::get('admin/category',[CategoryController::class,'index']);
Route::get('admin/manage_category',[CategoryController::class,'manage_category']);

Route::get('admin/category',[CategoryController::class,'showproduct']);
Route::post('admin/manage_category',[CategoryController::class,'addproduct']);
Route::get('admin/editcategory/{id}', [CategoryController::class, 'editcategory']);
Route::post('admin/updatecategory/{id}', [CategoryController::class, 'updateproduct']);
Route::get('admin/deletecategory/{id}', [CategoryController::class, 'destroy']);
Route::get('logoutadmin' , [AdminController::class,'logoutadmin'])->name('logoutadmin');
    
   
});

// CartDetails Routes
Route::get('view', [CategoryController::class, 'viewproduct']);
Route::get('detail/{id}' , [CategoryController::class,'detail']);
Route::get('search' , [CategoryController::class,'search']);
Route::post('addtocart' , [CategoryController::class,'addtocart']);
Route::get('cartlist' , [CategoryController::class,'cartlist'])->name('cartlist');
Route::post('checkout' , [CategoryController::class,'checkout'])->name('checkout');

Route::get('thankyou' , [CategoryController::class,'proceed'])->name('thankyou');





































