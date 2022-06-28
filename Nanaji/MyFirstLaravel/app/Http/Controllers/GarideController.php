<?php

namespace App\Http\Controllers;

use App\Models\nani;
use Illuminate\Http\Request;

class GarideController extends Controller
{
    public function sh(){
        $data= nani::all();
         return view("nanii",compact("data"));
   }  
}   