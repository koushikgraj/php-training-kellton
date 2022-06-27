<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detail;

class ContectController extends Controller
{
    
    function get(Request $req){
        $req->validate([
            'name'=>'required |max:30|min:3',
            'email'=>'required',
            'dob'=>'required',
            'city'=>'required',
            'state'=>'required',
            'country'=>'required',
            'subject'=>'required',
            'massage'=>'required'
        ]);
         $Detail= new detail;
        $Detail->name=$req->name;
        $Detail->email=$req->email;
        $Detail->dob=$req->dob;
        $Detail->city=$req->city;
        $Detail->state=$req->state;
        $Detail->country=$req->country;
        $Detail->subject=$req->subject;
        $Detail->massage=$req->massage;
        $Detail->save();
        return redirect('nav');
    }
    
}
