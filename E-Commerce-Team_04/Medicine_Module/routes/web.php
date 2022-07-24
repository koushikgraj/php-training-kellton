<?php

use Illuminate\Support\Facades\Route;
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
    Route::get('admin/checkout',[CategoryController::class , 'checkout']);
    Route::post('admin/checkout',[CategoryController::class , 'checkoutProduct']);
    Route::get('admin/category/addcategory',[CategoryController::class , 'addCategory']);
    Route::post('admin/category/addcategory',[CategoryController::class , 'addproductCategory']);
    Route::get('admin/category/list',[CategoryController::class , 'categoryList']);
    Route::get('admin/category/delete/{id}',[CategoryController::class , 'deleteCategory']);
    Route::get('admin/category/editcategory/{id}',[CategoryController::class , 'editCategory']);
    Route::post('admin/category/modifycategory/{id}',[CategoryController::class , 'modifyCategory']);
    Route::post('admin/addtocart',[CategoryController::class , 'addToCart']);
    Route::get('admin/cart',[CategoryController::class , 'cartItem']);




    Route::get('admin/thankyou', function () {
        return view('admin.thankyou');
    });
    // ***************************************************************
// Routes for product
    Route::get('admin/single-product1', function () {
        return view('admin.biodimra');
    });
    Route::get('admin/single-product2', function () {
        return view('admin.chanca');
    });
    Route::get('admin/single-product3', function () {
        return view('admin.umceka');
    });
    Route::get('admin/single-product4', function () {
        return view('admin.cetyl');
    });
    Route::get('admin/single-product5', function () {
        return view('admin.paracetamol');
    });
    Route::get('admin/single-product6', function () {
        return view('admin.poo');
    });
    Route::get('admin/single-product7', function () {
        return view('admin.savlon');
    });
    Route::get('admin/single-product8', function () {
        return view('admin.cla');
    });
    Route::get('admin/single-product9', function () {
        return view('admin.tolterodine');
    });
   
});





