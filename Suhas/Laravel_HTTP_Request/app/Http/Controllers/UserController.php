<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function testRequest(Request $req)
    {
        // echo "form Submitted";
         return $req->input();
    }

    public function testPost(Request $req)
    {
        return $req->input();
    }

    public function testPut(Request $req)
    {
        return $req->input();
    }

    public function testDelete(Request $req)
    {
        return $req->input();
    }
}
