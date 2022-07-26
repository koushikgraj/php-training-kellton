<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\userModuleController;
use App\Http\Controllers\ERPController;
use App\Http\Controllers\TimesheetController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\OnbordingController;
use App\Http\Controllers\ProfilePageController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\QualificationController;


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



// =========================On-Bording Routes========================================PROFILE
Route::get('user-profile',[OnbordingController::class,'onbording_Profile']);
//===================================================================================QUQLIFICATION
Route::get('qualifications',[OnbordingController::class,'qualifications']);
//===================================================================================SKILLS
Route::get('skills',[OnbordingController::class,'skills']);
//===================================================================================WORK-EXPERIENCE
Route::get('work-experience',[OnbordingController::class,'work_experience']);
//=======================================================================================BANK-FORM
// Route::get('bank-details',[OnbordingController::class,'bank']);
Route::get('bankdetails',[OnbordingController::class,'bank']);
Route::post('bank-details',[OnbordingController::class,'storebankdetails']);
// Route::get('bank-detail',[OnbordingController::class,'bank']);
Route::get('/onbording/bankdetails',[OnbordingController::class,'storebankdetails']);
//==========================================================================================SHOW
Route::get('addbankdata',[OnbordingController::class,'bank']);
//model emp band data tooooo show bank details table============================
Route::get('showbankdata',[OnbordingController::class,'onbording_bank_details']);
Route::get('viewbankdata/{id}',[OnbordingController::class,'viewbankdata']);
//===========================================================================================EDIT
Route::get('editbankdata/{id}',[OnbordingController::class,'editbankdata']);
//===========================================================================================UPDATE
Route::post('updatebankdata/{id}', [OnbordingController::class, 'updatebankdata']);
//===========================================================================================DELETE
Route::DELETE('deletebankdata/{id}',[OnbordingController::class,'destroy']);



//======================================================================================//
// Route::post('display-ProfilePage',[ProfilePageController::class,'ProfilePage']);
Route::post('display-ProfilePage',[ProfilePageController::class,'ProfilePagestore']);
Route::view('display-ProfilePage','ProfilePage');
Route::get('addProfilePagedata',[ProfilePageController::class,'ProfilePagestore']);
Route::get('gotoqdetail',[ProfilePageController::class,'gotoqdetail']);
Route::get('editProfilePagedata/{id}',[ProfilePageController::class,'editProfilePagedata']);
Route::post('updateProfile/{id}',[ProfilePageController::class,'updateProfilePage']);
Route::get('showProfilePagedata',[ProfilePageController::class,'gotoqdetail']);
 Route::get('deleteProfilePagedata/{id}',[ProfilePageController::class,'destroy']);
 Route::get('viewProfilePagedata/{id}',[ProfilePageController::class,'viewProfilePagedata']);
 Route::get('backbutton',[ProfilePageController::class,'gotoqdetail']);



 Route::get('Skills',[SkillsController::class,'Skillsstore']);
 Route::post('Skilldata',[SkillsController::class,'Skillsstore']);
 Route::get('gotoqdetail',[SkillsController::class,'gotoqdetail']);
 Route::get('addSkilldata',[SkillsController::class,'Skillsstore']);
 Route::get('editSkilldata/{id}',[SkillsController::class,'editskilldata']);
 Route::get('viewSkilldata/{id}',[SkillsController::class,'viewskilldata']);
 Route::get('deleteSkilldata/{id}',[SkillsController::class,'destroy']);
 Route::get('backbutton',[SkillsController::class,'gotoqdetail']);
 Route::get('backbutton',[SkillsController::class,'gotoqdetail']);
 Route::post('updateSkilldata/{id}',[SkillsController::class,'updateSkilldata']);


 
 Route::get('Qualification',[QualificationController::class,'Qualificationstore']);
 Route::get('Qualification',[QualificationController::class,'Qualificationstore']);
 Route::post('Qdata',[QualificationController::class,'Qualificationstore']);
 Route::get('addQualificationdata',[QualificationController::class,'Qualificationstore']);
 Route::get('gotoqdetail',[QualificationController::class,'gotoqdetail']);
 Route::get('deleteQualification/{id}',[QualificationController::class,'destroy']);
 Route::get('editQualificationdata/{id}',[QualificationController::class,'editqualificationdata']);
 Route::post('updatequalificationdata/{id}',[QualificationController::class,'updatequalificationdata']);
 Route::get('showqualification',[QualificationController::class,'gotoqdetail']);
 Route::get('viewQualificationdata/{id}',[QualificationController::class,'viewqualificationdata']);
 Route::get('backbutton',[QualificationController::class,'gotoqdetail']);

