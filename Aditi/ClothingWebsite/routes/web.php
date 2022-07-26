<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
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

// Route::get('index', function () {
//     return view('index');
// });

// for users

Route::get('index',[CategoryController::class,'index'])->name('index');;

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/login', function () {
    return view('login');
});
//Route::post('login' , [AuthController::class,'login']);

Route::get('/dashboard', function () {
    return view('dashboard');
});

// Route::get('/adproduct', function () {
//     return view('adproduct');
// });

// for admin
Route::get('adproduct',[CategoryController::class,'adminlayshow']);

Route::get('admin',[CategoryController::class,'adminshow']);
Route::post('admin',[CategoryController::class,'saveadmin']);

Route::get('/adsignup', function () {
    return view('adsignup');
});

Route::get('/adlogin', [AdminController::class, 'index']);
Route::post('/adlogin', [AdminController::class, 'adlogin']);

Route::group(['middleware' => 'web'], function () {
    Route::post('/register', [AdminController::class, 'register']);
});



Route::get('edit/{id}', function () {
    return view('update');
});
// Route::get('edit',[CategoryController::class,'update']);
Route::post('update/{id}',[CategoryController::class,'update']);


Route::post('category',[CategoryController::class,'saveusercategory']);
Route::get('category',[CategoryController::class,'usershow']);
//Route::get('shcategory',[CategoryController::class,'show']);

Route::get('adcategory',[CategoryController::class,'show']);
Route::post('adcategory',[CategoryController::class,'savecategory']);

Route::post('contact',[ContactController::class,'contactform']);
Route::get('contact',function(){
    return view('contact');
});

Route::get('shop', function () {
    return view('shop');
});

// Route::get('detail', function () {
//     return view('detail');
// });
Route::get('detail/{id}',[CategoryController::class,'detail']);
//Route::post('detail/{CategoryId}',[CategoryController::class,'detail']);

// Route::post('cart',[CategoryController::class,'cart']);
// Route::get('cart/{CategoryId}',[CategoryController::class,'cart']);

// Route::post('addToCart',[CategoryController::class,'addToCart']);
Route::post('addToCart' , [CategoryController::class,'addToCart'])->name('addToCart');
//Route::put('addToCart',[CategoryController::class,'addToCart']);

// Route::get('cart', function () {
//     return view('cart');
// });
// Route::get('cart',[CategoryController::class,'store']);

Route::get('checkout', function () {
    return view('checkout');
});

Route::get('logout',[CategoryController::class,'logout']);

// Route::post('register',[CategoryController::class,'register'])->name('register');
// Route::get('register',[CategoryController::class,'register'])->name('register');

// Route::post('register_store',[CategoryController::class,'register_store'])->name('register_store');

// Route::post('loginCheck',[CategoryController::class,'loginCheck'])->name('loginCheck');

