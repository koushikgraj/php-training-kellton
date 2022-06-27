<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

class UserController extends Controller
{


    /**
     * Store a new user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function request(Request $request)
    {
        //return $request->input(); 
        //dump($request->input());
        //return $input= $request->input('user');
        //return $input= $request->collect();
        //return $input= $request->all();
        //return $ipAddress = $request->ip();
       //return  $contentTypes = $request->getAcceptableContentTypes(); 
       //return $uri = $request->path();  // returns the path of the request
        return $url = $request->url();  // returns the full url of the incoming request
       //return $urlWithQueryString = $request->fullUrl(); //returns the url witj the query string
        //return $request->host(); // retreive the host
      // return  $method = $request->method(); // returns the method

 

 
 
    } 
    
    

}

