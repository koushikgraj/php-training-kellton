<?php

namespace App\Http\Controllers;

use App\Models\Students1;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function message(){
        $data=Students1::all();
        return view("Student",compact('data'));
    }
}
