<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class UserController extends Controller
{
    /**
     * Update the specified user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return $request->method();
    }
    public function url(Request $request)
    {
        return $request->method();
    }
    public function fulurl(Request $request)
    {
        return $request->method();
    }  
    public function path(Request $request)
    {
        return $request->method();

    }  
}