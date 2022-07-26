<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;


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



Route::get('admin/layout', function () {
    return view('admin.layout');
});




Route::get('admin', [AdminController::class , 'index']);
Route::get('admin/auth', [AdminController::class , 'auth']);
Route::post('admin/auth', [AdminController::class , 'auth']);
Route::get('admin/register', [AdminController::class , 'register']);
Route::post('admin/register', [AdminController::class , 'create']);


Route::group(['middleware'=>'admin_auth'],function(){

    
    Route::get('admin/logout',[AdminController::class , 'logoutUser']);
    Route::get('admin/home',[AdminController::class , 'home']);
    //Route::get('admin/store',[AdminController::class , 'store']); 
    Route::get('admin/store',[CategoryController::class , 'storeList']);
    Route::get('admin/checkout',[ProductController::class , 'checkout']);
    Route::post('admin/checkout',[ProductController::class , 'checkoutProduct']);
    Route::get('admin/category/addcategory',[CategoryController::class , 'addCategory']);
    Route::post('admin/category/addcategory',[CategoryController::class , 'addproductCategory']);
    Route::get('admin/category/list',[CategoryController::class , 'categoryList']);
    Route::get('admin/category/delete/{id}',[CategoryController::class , 'deleteCategory']);
    Route::get('admin/category/editcategory/{id}',[CategoryController::class , 'editCategory']);
    Route::post('admin/category/modifycategory/{id}',[CategoryController::class , 'modifyCategory']);
    Route::post('admin/addtocart',[ProductController::class , 'addToCart']);
    Route::get('admin/cart',[ProductController::class , 'cartItemList']);
    Route::get('admin/cart/removeproduct/{id}',[ProductController::class , 'removeFromCart']);
    Route::get('admin/myorders',[ProductController::class , 'myOrders']);
    Route::get('admin/search',[ProductController::class , 'search']);




    Route::get('admin/thankyou', function () {
        return view('admin.thankyou');
    });
    // **************************************************************
});





