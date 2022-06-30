<?php

namespace App\Http\Controllers;

use App\User;

class TestController extends Controller
{
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function show()
    {
       echo "I am in test controller";
    }
}