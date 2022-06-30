<?php

namespace App\Http\Controllers;


use App\Models\details;
use Illuminate\Http\Request;
class firstcontroller extends Controller
{
    public function message(){
        echo "This is first controller";
    }
    public function sai(){
        return details::all();

    }
        
    
}