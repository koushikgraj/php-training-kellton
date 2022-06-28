<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyMod;

class ContactController extends Controller
{
   public function home()
   {
    return view('home');
   }
   public function store(Request $request)
   {
       $input = $request->all();
       MyMod::create($input);
       return redirect('contactus')->with('flash_message', 'Student Addedd!');  
   }


   public function aboutus()
   {
    return view('aboutus');
   }

   public function contactus(request $req)
   {
    return view('contactus');

    $req-> validate([
        'name'=>'required |min:3 |max:30','email' =>'required'
    ]);
   }

   public function myprofile()
   {
    return view('myprofile');
   }

}