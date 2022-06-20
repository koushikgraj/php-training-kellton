<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\account;

class UserController extends Controller
{
    //
    function getdata(Request $req){
       $account= New account;
       $account->type=$req->type;
       $account->email=$req->email;
       $account->password=$req->password;
       $account->name=$req->name;
       $account->save();
       return redirect('llists');
    }
    
}
