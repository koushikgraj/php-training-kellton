<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/a',function ()
{
    return view("world");
});

use App\Http\Controllers\UserController;
 
Route::get('/user', [UserController::class, 'index']);

Route::get('/{id}', function ($id) {
    return 'The given Id is  '.$id;
});

Route::get('/abc/{name}', function ($name) {
    return 'The training of '.$name . ' is going on.';
});

Route::get('/name/{name}/id/{empId}', function ($name, $empId) {
    return 'Employee name is '.$name .' and his employee Id is '.$empId .'.';
});
*/
Route::get('/first-sample',[EmployeeController::class, 'sample']);

//CURD
Route::get('/getEmployee',[EmployeeController::class, 'getEmployee']);
Route::get('/addEmployee',[EmployeeController::class, 'createEmployee']);
Route::get('/updateEmployee', [EmployeeController::class, 'updateEmployee']);
Route::get('/deleteEmployee', [EmployeeController::class, 'deleteEmployee']);



