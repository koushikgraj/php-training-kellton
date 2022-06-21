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
        subjects::where('id', 1)->update(['subject' => 'Sanskrit']);
        echo "Subject updated succesfully";
    }

    public function deleteSubjects()
    {
        subjects::where('subject', 'Hindi')->delete();
        echo "Subject deleted succesfully";
    }

}
