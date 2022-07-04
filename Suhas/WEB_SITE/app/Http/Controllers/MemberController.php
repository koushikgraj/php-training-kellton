<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
class MemberController extends Controller
{
    
    public function addData(Request $req)
    {
        print_r($req->all());
        //     $this->validate($req ,
    //     ['name'=>'required|min:3',
    //     'email'=>'required',
    //     'DOB'=>'required',
    //     'state'=>'required',
    //     'city'=>'required',
    //     'message'=>'required'
    // ]);

        $member = new Member;
        $member->name = $req->Name;
        $member->email=$req->email;
        $member->DOB=$req->DOB;
        $member->state=$req->state;  
        $member->city=$req->city;
        $member->message=$req->message;

        $member->save();
        return redirect('home');
          
    }
}
