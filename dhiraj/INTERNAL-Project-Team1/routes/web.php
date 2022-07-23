<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
    return view('home');
});
//===============================header routes
Route::view('shop','shop');
Route::view('cart','cart');
Route::view('contact','contact');
Route::view('checkout','checkout');
Route::view('shopdetail','shopdetail');

Route::view('dell_laptop','dell_laptop');
Route::view('apple_laptop','apple_laptop');
Route::view('asus_laptop','asus_laptop');
Route::view('lenevo_laptop','lenevo_laptop');

Route::view('Mouse','mouse');
Route::view('Camera','camera');
Route::view('mobiles','mobile');
Route::view('Charger','charger');
Route::view('Speakers','speakers');
Route::view('Powerbank','powerbank');
Route::view('Headphones','headphones');
Route::view('Smartwearable','smartwearable');

Route::get('login', [UserController::class, 'login']);
Route::post('post-login', [UserController::class, 'postLogin']);
Route::post('registration', [UserController::class, 'registration']);



 
 Route::post('post-registration', 'UserController@postRegistration'); 
 Route::get('dashboard', 'UserController@dashboard'); 
 Route::get('logout', 'UserController@logout');



Route::get("detail/{id}",[ProductController::class,'detail']);
Route::get("search",[ProductController::class,'search']);
Route::post("add_to_cart",[ProductController::class,'addToCart']);
Route::get("cartlist",[ProductController::class,'cartList']); 
Route::get("removecart/{id}",[ProductController::class,'removeCart']); 
Route::get("ordernow",[ProductController::class,'orderNow']); 
Route::post("orderplace",[ProductController::class,'orderPlace']);
Route::get("myorders",[ProductController::class,'myOrders']);
 
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
