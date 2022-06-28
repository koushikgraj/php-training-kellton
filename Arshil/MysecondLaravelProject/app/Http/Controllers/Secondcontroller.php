<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subjects;
class Secondcontroller extends Controller
{
    public function getSubjects()
    {
        $data = Subjects::all();
        return view("students",compact('data'));
    }

    public function createsubject_name()
    {
        $subject = new subject_name;
        $subject->subject_name = "Physics"; 
        $subject->save();
        echo "Subject created succesfully";
    }

    public function updatesubject_name()
    {
        Subjects::where('id', 1)->update(['subject_name' => 'Sanskrit']);
        echo "subject_name updated succesfully";
    }

    public function deletesubject_name()
    {
        Subjects::where('name', 'Physics')->delete();
        echo "subject_name deleted succesfully";
    }
}

