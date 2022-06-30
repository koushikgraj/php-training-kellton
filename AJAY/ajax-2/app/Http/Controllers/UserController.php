<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view("show");
    }

    public function ajaxCall(){
        $data  = array("one","two","three");
        return response()->json(['data'=>$data]);
    }
}
