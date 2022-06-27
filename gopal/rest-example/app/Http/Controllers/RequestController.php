<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function index(Request $request)
    {
        return $request->method();
    }
    public function url(Request $request)
    {
        return $request->url();
    }
    public function fullurl(Request $request)
    {
        return $request->fullurl();
    }
    public function path(Request $request)
    {
        return $request->path();
    }
}
