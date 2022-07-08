<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;

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

Route::get('home', function () {
    return view('layout');
});

Route::post('store', [AttendanceController::class, 'store']);
Route::get('attendance',function(){
    return view('attendance');
});
// Route::get('display',function(){
//     return view('display');
// });
 Route::get('get',[AttendanceController::class,'index']);

 Route::get('display',[AttendanceController::class,'show']);




// Route::post('dae',function(){
//     return view('dae');
// });




// Route::get('form',[AttendanceController::class,'form']);
//Route::get('add',[AttendanceController::class,'add']);






// Route::get('/attendance/list-attendances', 'AttendanceController@index')->name('attendance.index');
// Route::post('/attendance/list-attendances', 'AttendanceController@index')->name('attendance.index');
// Route::post('/attendance/get-location', 'AttendanceController@location')->name('attendance.get-location');
// Route::get('/attendance/register', 'AttendanceController@create')->name('attendance.create');
// Route::post('/attendance/{employee_id}', 'AttendanceController@store')->name('attendance.store');
// Route::put('/attendance/{attendance_id}', 'AttendanceController@update')->name('attendance.update');



Route::get('sample', function () {
    return view('sample');
});




// Route::get('/attendance', function () {
//     return view('attendance');
// });