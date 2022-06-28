<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reqcontroller extends Controller
{
    public function index(Request $request){
        return $request->method();
    }
    public function fullurl(Request $request){
        return $request->fullurl();
    }
    public function url(Request $request){
        return $request->url();
    }
    public function path(Request $request){
        return $request->path();
    }
    public function ip(Request $request){
        return $request->ip();
    }
    public function all(Request $request){
        return view('all');
    }
    
}
