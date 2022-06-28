<?php

namespace App\Http\Controllers;
use illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function demo($name)
    {
        echo "Hello" . $name;
    }

    public function requestmethods(Request $request)
    {
       echo "URL = ", $request->url();
        echo "fullurl = " ,$request->fullurl();
        echo "method used = " ,$request->method();
    }
}