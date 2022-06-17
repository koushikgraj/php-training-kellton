<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subjects;

class FirstController extends Controller
{
    function books()
    {
        echo "<h1 style='color:green;'>This is first controller page</h1>";
    }

    public function getsubjects(){
        $data = subjects::all();
        return view("studentmodel", compact('data'));
    }

    public function createsubjects(){
        $subject = new subjects;
        $subject->subject = "Humanity";
        $subject->save();
        echo "subject created successfully";
    }

    public function updatesubjects(){
        Flight::where('active', 1)->updated(['delayed' =>1]);
    }

}
