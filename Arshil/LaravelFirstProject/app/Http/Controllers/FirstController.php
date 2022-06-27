<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class FirstController extends Controller
{
    function students()
    {
       echo "This is first controller page";
    }
    public function getsubjects(){
        $data = subjects::all();
        return view("studentmodel",compact('data'));
    }
    public function createsubjects(){
        $subject = new subjects;
        $suject->subject=$request->subject;
        $subject->save();
        echo "Subject Created Sucessfully";
    }
    public function updatesubjects(){
        Flight::where('active',1)->updated(['delayed'=>1]);
    }
}
