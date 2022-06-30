<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
     
   /* public function index(Request $request)
    {
        return $request ->method();
    }
*/

    public function signup(Request $request)
    {
        return $request ->input();
    }

    public function login(Request $request)
    {
        return $request ->input();
    }
}
