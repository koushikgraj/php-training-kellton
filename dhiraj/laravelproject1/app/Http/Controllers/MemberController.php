<?php

// use App\Http\Controllers\MemberController;
// Route::view('add','addMembers');
// Route::post('add',[MemberController::class,'addData']);
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    function addData(Request $req)
    {
$member =new Member;
$member->name=$req->name;
$member->email=$req->email;
$member->address=$req->address;
$member->save(); 
return redirect('add');   
}

function list()
{
    $data=Member::all();
    return view('list',['members'=>$data]);
}

function delete($id){
    $data=Member::find($id);
    $data->delete();
    return redirect('list');
}
}
