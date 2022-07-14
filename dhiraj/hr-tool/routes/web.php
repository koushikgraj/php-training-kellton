<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\userModuleController;
use App\Http\Controllers\ERPController;
use App\Http\Controllers\TimesheetController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\OnbordingController;
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

Route::get('/',[UserModuleController::class , 'loginUser']);

Route::get('layout', function () {
    return view('layout');
});

Route::get('apply', function () {
    return view('apply');
});
    
Route::post('store',[LeaveController::class,'saveleave']);
Route::get('create',[LeaveController::class,'show']);


/*Route::get('create', function () {
    return view('create');
});*/


Route::get('approve', function () {
    return view('approve');
});
/*Route::get('login', function () {
    return view('login');
});*/

/*Route::get('ldetails', function () {
    return view('leave-details');
});*/
Route::post('adaction',[LoginController::class,'adaction']);

Route::post('adlogin',[LoginController::class,'login']);
Route::get('adlogin',[LoginController::class,'loginuser']);
Route::get('admin',[LoginController::class,'show']);

Route::get('details/{id}',[LoginController::class,'viewDetails']);

Route::get('takeaction',[LoginController::class,'adaction']);

//Route::get('actionad',[LoginController::class,'adaction']);

//--//team 1
Route::get('layout', function () {
    return view('layout');
});


Route::post('add',[UserModuleController::class,'addUser']);
Route::get('add',[UserModuleController::class , 'User']);
Route::get('update',[UserModuleController::class , 'update']);


Route::post('login',[UserModuleController::class , 'login']);
Route::get('login',[UserModuleController::class , 'loginUser']);

Route::get('ex', function () {
    if(Session::exists('user')) {
        return view('executivedashboard');
    }else{
        return view('not_authorized');
    }
});
Route::get('dash', function () {    
    return view('dashboard');
});

Route::get('myprofile', function () {    
    return view('get');
});



Route::get('logout',[UserModuleController::class , 'logoutUser']);
Route::get('get',[UserModuleController::class , 'getUser']);


//team 2
Route::get('createholiday', function () {
    return view('createholiday');
});

Route::post('store', [ERPController::class, 'store']);
Route::get('holiday', [ERPController::class, 'holiday']);

Route::get('editholiday/{id}', [ERPController::class, 'edit']);
Route::post('updateholiday/{id}', [ERPController::class, 'update']);

Route::get('deleteholiday/{id}', [ERPController::class, 'destroy']);

// ## Update
// Route::get('edit/{id}', 'ERPController@edit')->name('edit');
// Route::post('update/{id}', 'ERPController@update')->name('update');

// ## Delete
// Route::get('delete/{id}', 'ERPController@destroy')->name('delete');


Route::get('/timesheet', function () {
    return view('timesheet');
});


Route::post('/store-timesheet', [TimesheetController::class, 'store']);


Route::get('get-timesheet', [TimesheetController::class, 'index']);


Route::post('store-attendance', [AttendanceController::class, 'store']);
Route::get('attendance',function(){
    return view('attendance');
});

 Route::get('get-attendance',[AttendanceController::class,'index']);

 Route::get('display-attendance',[AttendanceController::class,'show']);



// =========================On-Bording Routes============================

Route::get('user-profile',[OnbordingController::class,'onbording_Profile']);
Route::get('qualifications',[OnbordingController::class,'qualifications']);
Route::get('skills',[OnbordingController::class,'skills']);
Route::get('work-experience',[OnbordingController::class,'work_experience']);
Route::get('bank-details',[OnbordingController::class,'bank']);

Route::post('bank-details',[OnbordingController::class,'storebankdetails']);

Route::get('/onbording/bankdetails',[OnbordingController::class,'storebankdetails']);

//===============
Route::get('addbankdata',[OnbordingController::class,'bank']);
//model emp band data tooooo show bank details table========================
Route::get('showbankdata',[OnbordingController::class,'onbording_bank_details']);


//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
Route::get('editbankdata/{id}',[OnbordingController::class,'editbankdata']);
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
Route::post('updatebankdata/{id}', [OnbordingController::class, 'updatebankdata']);

Route::get('deletebankdata/{id}',[OnbordingController::class,'destroy']);
Route::get('viewbankdata/{id}',[OnbordingController::class,'viewbankdata']);

