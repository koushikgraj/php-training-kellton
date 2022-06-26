<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\table;

class postcontroller extends Controller
{
    
    
     

   function get(Request $req){
        $Detail= new table;
                $Detail->name=$req->name;
                $Detail->email=$req->email;
                $Detail->date=$req->date;
                $Detail->city=$req->city;
                $Detail->state=$req->state;
                $Detail->country=$req->country;
                $Detail->subject=$req->subject;
                $Detail->message=$req->message;
                $Detail->save();
                return redirect('layout');
            }


}

