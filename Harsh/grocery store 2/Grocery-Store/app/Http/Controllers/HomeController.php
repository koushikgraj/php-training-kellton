<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('front.home');
    }
    public function shopingcart(){
        return view('front.shopingcart');
    }
    public function checkout(){
        return view('front.checkout');
    }
    public function contact(){
        return view('front.contact');
    }
}
