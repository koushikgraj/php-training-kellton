<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Store a new user.
     *
     * @param  Request  $request
     * @return Response
     */
 /*   public function store(Request $request)
    {
        $name = $request->input('name');
        return "Hello";   
    } */
    public function show($id)
    {
        return "The id is ".($id);
    }
}