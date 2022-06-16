<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\FirstcountController;


//this is working route
// use App\Http\Controllers\ContnameController;

use App\Http\Controllers\MemberController;
// use App\Http\Controllers\ContfirstController;
// use App\Http\Controllers\Secondcont;
// use\App\Models\Subject;
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
Route::get('dk', function(){
    return view('Oops@index');
});
Route::get('/a', function(){
    return view('dk');
});




// Route::get('/f',[Firstcont::class,'first']);
// Route::get('/s',[Secondcont::class,'second']);

// Route::get('f/{name?}', 'Firstcont@first')->name('user.index');

// Route::get('/f',[Firstcont::class,'first']);
// Route::get('/s',[Secondcont::class,'second']);


//this is working route
// Route::get('/get-data',[FirstcountController::class,'getSub']);

//this is working route
// Route::get('/url',[ContnameController::class,'contfunction']);

// Route::get('/read',[ContfirstController::class,'cfun']);
// Route::get('/create',[ContfirstController::class,'cSub']);
// Route::get('/update',[ContfirstController::class,'uSub']);
// Route::get('/delete',[ContfirstController::class,'dSub']);

Route::view('add','addMembers');
Route::post('add',[MemberController::class,'addData']);
Route::get('list',[MemberController::class,'list']);
Route::get('delete/{id}',[MemberController::class,'delete']);

/*
Route::get('/h', function(){
    return view('first');
});
Route::view('dk','user@index');

Route::get('dk','user@index');

//name routing
// <a href="myprofile">Click here</a>
Route::get('/user/myprofile', function(){
    return "<h1>Name routing</h1>";
})->name('profile');


//group routing
Route::middleware(['first','second'])->group (function(){
Route::get('/user/{name?}', function(){
    return "<h1>Name routing</h1>";
});

Route::get('/second', function(){
    return "<h1>Name routing</h1>";
});
});


//parameter rputing
Route::get('/user/{id}', function($id){
    return "<h1>'User '.$id</h1>";
});
*/
