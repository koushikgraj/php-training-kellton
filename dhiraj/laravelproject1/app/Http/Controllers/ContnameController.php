<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modelname;

class ContnameController extends Controller
{
    function contfunction()
    {
        $data=Modelname::all();
        return view("viewname", compact('data'));
    }
}
