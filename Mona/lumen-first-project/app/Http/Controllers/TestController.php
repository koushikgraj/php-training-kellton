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

    /*public function requestmethods(Request $request)
    {
       echo "URL = ", $request->url();
        echo "fullurl = " ,$request->fullurl();
        echo "method used = " ,$request->method();
    }*/

    public function requestMethods(Request $request)
    {
        echo "<br><br>URL = ",$request->url();

        echo "<br><br>Full URL = ",$request->fullUrl();

        echo "<br><br>Method = ",$request->method();
        if ($request->isMethod('post')) {
            echo "<br>The request is post method";
        } else {
            echo "<br>The request is not post method";
        }
    }
}