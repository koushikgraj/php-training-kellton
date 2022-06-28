<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class TestController extends Controller
{
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function hi($name)
    {
        echo "Hi ".$name;
    }


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