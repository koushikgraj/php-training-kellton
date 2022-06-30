<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Website;


class WebController extends Controller
{
   public function home()
   {
    return view('home');
   }


   public function aboutus()
   {
    return view('aboutus');
   }

  
   public function myprofile()
   {
    return view('myprofile');
   }
   function Contactus(Request $req){
    $input=$req->all();
    Website::create($input);
    return redirect('contactus')->with('flash_message','Form Filled Sucessfully');

}
}