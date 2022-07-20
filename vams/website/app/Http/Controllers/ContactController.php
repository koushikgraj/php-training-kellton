<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class ContactController extends Controller
{

    public function validateform(Request $req) {
        print_r($req->all());
        $this->validate($req,[
           'name'=>'required|min:3',
           'email'=>'required',
           'date'=>'required',
           'city'=>'required',
           'state'=>'required',
           'country'=>'required',
           'subject'=>'required',
           'message'=>'required'
        ]);

    }


   function get(Request $req){
        $Detail= new contact;
                $Detail->name=$req->name;
                $Detail->email=$req->email;
                $Detail->date=$req->date;
                $Detail->city=$req->city;
                $Detail->state=$req->state;
                $Detail->country=$req->country;
                $Detail->subject=$req->subject;
                $Detail->message=$req->message;
                $Detail->save();
                return redirect('nav');
            }
    public function add(){
        return view ('home');
    }

}
    