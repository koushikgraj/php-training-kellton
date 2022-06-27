<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form;

class dummyAPI extends Controller
{
    //
    function getData($id=null){
        return $id?form::find($id):form::all();
    }
}
