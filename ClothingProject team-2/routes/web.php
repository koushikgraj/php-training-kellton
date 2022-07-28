<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

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

Route::get('layout', function () {
    return view('layout');
});

Route::get('index',[CategoryController::class,'index'])->name('index');;

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/login', function () {
    return view('login');
});
Route::post('login' , [AuthController::class,'login']);

Route::get('/dashboard', function () {
    return view('dashboard');
});



// for admin

Route::get('adminlogin',[AdminController::class,'login'])->name('adminlogin');
Route::post('adminlogin',[AdminController::class,'makeLogin'])->name('admin.makeLogin');

// Grouped Middleware
Route::group(['middleware' =>'auth'],function(){

Route::get('adproduct',[CategoryController::class,'adminlayshow']);

Route::get('admin',[CategoryController::class,'adminshow']);
Route::post('admin',[CategoryController::class,'saveadmin']);


Route::get('/adsignup', function () {
    return view('adsignup');
});

Route::post('adminlogout', [AuthController::class, 'adlogout']);

Route::get('/adlogin', [AdminController::class, 'index']);
Route::post('/adlogin', [AdminController::class, 'adlogin']);

Route::get('adcategory',[CategoryController::class,'show']);
Route::post('adcategory',[CategoryController::class,'savecategory']);

Route::get('adminlogout',[AdminController::class,'adminlogout']);

});
// Grouped Middleware ended

    // For Users

Route::post('/register', [AuthController::class, 'register']);


Route::get('edit/{id}', [CategoryController::class, 'edit']);

Route::post('update/{id}', [CategoryController::class, 'update']);

Route::get('delete/{id}', [CategoryController::class, 'destroy']);


Route::post('category',[CategoryController::class,'saveusercategory']);
Route::get('category',[CategoryController::class,'usershow']);
//Route::get('shcategory',[CategoryController::class,'show']);



Route::post('contact',[CategoryController::class,'contactForm']);
Route::get('contact',function(){
    return view('contact');
});

Route::get('shop', function () {
    return view('shop');
});

Route::get('detail/{id}',[CategoryController::class,'detail']);


// Route::post('addToCart',[CategoryController::class,'addToCart']);
Route::post('addToCart' , [CategoryController::class,'addToCart'])->name('addToCart');
//Route::put('addToCart',[CategoryController::class,'addToCart']);
Route::get('cartitem' , [CategoryController::class,'cartitem'])->name('cartitem');


Route::post('submit', function () {
    return view('submit');
});

Route::get('logout' , [AuthController::class,'logout'])->name('logout');



