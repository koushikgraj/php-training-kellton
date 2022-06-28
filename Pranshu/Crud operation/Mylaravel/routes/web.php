<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usecontroller;
use App\Http\Controllers\TodoController;

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



Route::get('/form', function () {
    return view('create');
});

Route::get('/todo',[TodoController::class,'show']);

Route::get('/store', [TodoController::class,'store']);

Route::get('/insert',[TodoController::class,'create']);

Route::post('/submit',[TodoController::class,'store'])->name('submit.post');


Route::get('/delete/{id}',[TodoController::class,'destroy']);

Route::get('/edit/{id}',[TodoController::class,'edit']);
Route::post('/update/{id}',[TodoController::class,'update'])->name('update.post');



// Route::get('/create',[TodoController::class,'create']);

// Route::get('/show',[TodoController::class,'show']);



// Route::middleware(['first','second'])->group(function(){
//     Route::get('./Pranshu', function () {
//         return view('Pranshu');
//     });
// });