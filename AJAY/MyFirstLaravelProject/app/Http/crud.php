<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subjects;

class FirstController extends Controller
{
    public function index()
    {
        echo "I am in FirstController index method";
    }

    public function getSubjects()
    {
        $data = Subjects::all();
        return view("students",compact('data'));
    }

    public function createSubjects()
    {
        $subject = new Subjects;
        $subject->subject = "Tamil"; 
        $subject->save();
        echo "Subject created succesfully";
    }

    public function updateSubjects()
    {
        Subjects::where('id', 1)->update(['subject' => 'Sanskrit']);
        echo "Subject updated succesfully";
    }

    public function deleteSubjects()
    {
        Subjects::where('subject', 'Tamil')->delete();
        echo "Subject deleted succesfully";
    }
}