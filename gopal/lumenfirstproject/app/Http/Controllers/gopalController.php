<?php

namespace App\Http\Controllers;

use App\User;

class gopalController extends Controller
{
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return "this is my id ".$id;
    }
    
    
}