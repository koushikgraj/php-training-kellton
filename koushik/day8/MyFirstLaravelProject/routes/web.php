<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\SecondController;

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

Route::get('/a', function () {
    return view('arshil');
});

Route::get('/aditi', function () {
    return view('aditi');
});

//Basic routing
Route::get('/greeting', function () {
    return 'Hello World';
});

 
Route::get('/first-index', [FirstController::class, 'index']);

Route::get('/xyz', [SecondController::class, 'abc']);

//CRUD
Route::get('/read-subjects', [FirstController::class, 'getSubjects']);
Route::get('/create-subject', [FirstController::class, 'createSubjects']);
Route::get('/update-subject', [FirstController::class, 'updateSubjects']);
Route::get('/delete-subject', [FirstController::class, 'deleteSubjects']);

/*
//Named routing
//Named routes allows to change the specific URL(route) in the application
//name method to change the name route
Route::get('/user/profile', function () {
   return 'This page is user profile';
})->name('profile');


//Gouped routing
//Route groups allow you to share route attributes, such as middleware

//middleware group
Route::middleware(['first', 'second'])->group(function () {
    Route::get('/', function () {
        // Uses first & second middleware...
    });
 
    Route::get('/user/profile', function () {
        // Uses first & second middleware...
    });
});


//controller group
use App\Http\Controllers\OrderController;
 
Route::controller(OrderController::class)->group(function () {
    Route::get('/orders/{id}', 'show');
    Route::post('/orders', 'store');
});

//subdomain group
Route::domain('{account}.example.com')->group(function () {
    Route::get('user/{id}', function ($account, $id) {
        //
    });
});


//ROUTING PARAMETERS
/*
Sometimes you will need to capture segments of the URI within your route. For example, you may need to capture a user's ID from the URL. You may do so by defining route parameters:

Route::get('/user/{id}', function ($id) {
    return 'This is parameter route. User ID =   '.$id;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    //
});


//Optional parameters
Route::get('/user/{name?}', function ($name = null) {
    return $name;
});
 
Route::get('/user-params/{name?}', function ($name = 'John') {
    return $name;
});
*/