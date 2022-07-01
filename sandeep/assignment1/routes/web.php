<?php
use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});
/*Route::get('/nav',function(){
    return view('navigation');
});
Route::get('/prf',function(){
    return view('profile');
});
Route::get('/home',function(){
    return view('home');
});*/
//Route::get('/don',[PostController::class,'message']);
Route::Post('/store',[PostController::class,'store']);
Route::get('p',[PostController::class,'profile']);
