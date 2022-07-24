<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\CategoryController;

use App\Http\Controllers\FrontController;



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
    return view('admin.login');
});
//=============================================LOGIN-CHECK
Route::get('/login', function () {
  if(session('admin_id') == '1')
  {
    return redirect('admin/dashboard');
  }else{
    // return view('home');
    return redirect('home');
  }
});
//=============================================
Route::get('/logout', function () {
    if(session()->has('email'))
    {
    session()->pull('email');
    }
    // return view('admin.login');
    return redirect('/');


  });
// ==============================================
//===============================================
Route::get('admin/dashboard',[AdminController::class,'dashboard']);
Route::get('home',[AdminController::class,'home']);
Route::post('userlogin',[UserController::class,'userlogin']);
Route::get('/registration',[UserController::class,'registration']);






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

Route::post('post-login',[UserController::class,'postLogin']);


//  Route::get('admin',[AdminController::class,'index']);
Route::post('admin/auth',[AdminController::class,'auth'])->name('admin.auth');
//  Route::get('admin/auth/updatepassword',[AdminController::class,'updatepassword']);

// Route::group(['middleware'=>'admin_auth'],function(){
    Route::get('admin/category',[CategoryController::class,'index']);
    Route::get('admin/category/manage_category',[CategoryController::class,'manage_category']);
    Route::get('admin/category/manage_category/{id}',[CategoryController::class,'manage_category']);
    Route::post('admin/category/manage_category_process',[CategoryController::class,'manage_category_process'])->name('category.manage_category_process');
    Route::get('admin/category/delete/{id}',[CategoryController::class,'delete']);

    Route::get('admin/category/status/{status}/{id}',[CategoryController::class,'status']);


    Route::get('admin/coupon',[CouponController::class,'index']);
    Route::get('admin/coupon/manage_coupon',[CouponController::class,'manage_coupon']);
    Route::get('admin/coupon/manage_coupon/{id}',[CouponController::class,'manage_coupon']);
    Route::post('admin/coupon/manage_coupon_process',[CouponController::class,'manage_coupon_process'])->name('coupon.manage_coupon_process');
    Route::get('admin/coupon/delete/{id}',[CouponController::class,'delete']);

    Route::get('admin/coupon/status/{status}/{id}',[CouponController::class,'status']);


    Route::get('admin/size',[SizeController::class,'index']);
    Route::get('admin/size/manage_size',[SizeController::class,'manage_size']);
    Route::get('admin/size/manage_size/{id}',[SizeController::class,'manage_size']);
    Route::post('admin/size/manage_size_process',[SizeController::class,'manage_size_process'])->name('size.manage_size_process');
    Route::get('admin/cousizepon/delete/{id}',[SizeController::class,'delete']);
    Route::get('admin/size/status/{status}/{id}',[SizeController::class,'status']);


    Route::get('admin/color',[ColorController::class,'index']);
    Route::get('admin/color/manage_color',[ColorController::class,'manage_color']);
    Route::get('admin/color/manage_color/{id}',[ColorController::class,'manage_color']);
    Route::post('admin/color/manage_color_process',[ColorController::class,'manage_color_process'])->name('color.manage_color_process');
    Route::get('admin/color/delete/{id}',[ColorController::class,'delete']);
    Route::get('admin/color/status/{status}/{id}',[ColorController::class,'status']);


    

 Route::get('admin/product',[ProductController::class,'index']);
    Route::get('admin/product/manage_product',[ProductController::class,'manage_product']);
    Route::get('admin/product/manage_product/{id}',[ProductController::class,'manage_product']);
    Route::post('admin/product/manage_product_process',[ProductController::class,'manage_product_process'])->name('product.manage_product_process');
    Route::get('admin/product/delete/{id}',[ProductController::class,'delete']);
    Route::get('admin/product/status/{status}/{id}',[ProductController::class,'status']);
    Route::get('admin/product/product_attr_delete/{paid}/{pid}',[ProductController::class,'product_attr_delete']);
    Route::get('admin/product/product_images_delete/{paid}/{pid}',[ProductController::class,'product_images_delete']);
    
    
//     Route::get('admin/logout', function () {
//         session()->forget('ADMIN_LOGIN');
//         session()->forget('ADMIN_ID');
//         session()->flash('error','Logout sucessfully');
//         return view('admin.login');
//     });
// });

// Route::get('/logout',[CustomAuthController::class,'index']);


// Route::get('/login',[CustomAuthController::class,'login']);
// Route::get('/registration',[CustomAuthController::class,'registration']);

Route::get('register',[UserController::class,'registration']);
Route::post('post-registration',[UserController::class,'postregistration']);







