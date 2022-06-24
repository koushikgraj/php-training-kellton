<?php

namespace App\Http\Controllers;

use App\Models\RequestYou;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
      $path = $request->path();
      echo '<h3>Path Method:::::: '.$path;
      echo '<br>';
     
    //   is method is used to retrieve the requested 
    // URI which matches the particular pattern specified 
    // in the argument of the method
      $pattern = $request->is('foo/*');
      echo 'is Method:::::::::: '.$pattern;
      echo '<br>';
      
      $url = $request->url();
      echo 'URL method:::::: '.$url."</h3>";
      
      return view("view");
    }

    public function postRegister(Request $request) {
        //Retrieve the name input field
        $name = $request->input('name');
        echo 'Name: '.$name;
        echo '<br>';
        
        //Retrieve the username input field
        $username = $request->username;
        echo 'Username: '.$username;
        echo '<br>';
        
        //Retrieve the password input field
        $password = $request->password;
        echo 'Password: '.$password;
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $name = $request->input('name');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RequestYou  $requestYou
     * @return \Illuminate\Http\Response
     */
    public function show(RequestYou $requestYou)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RequestYou  $requestYou
     * @return \Illuminate\Http\Response
     */
    public function edit(RequestYou $requestYou)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RequestYou  $requestYou
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RequestYou $requestYou)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RequestYou  $requestYou
     * @return \Illuminate\Http\Response
     */
    public function destroy(RequestYou $requestYou)
    {
        //
    }
}
