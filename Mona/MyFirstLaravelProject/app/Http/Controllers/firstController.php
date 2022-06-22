<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subjects;

class FirstController extends Controller
{
    public function index()
    {
        echo" I am in First Controller";
    }
   /* public function getSubjects()
    {
        foreach (subjects::all() as $tblobj)
        {
            echo $tblobj->name;
            echo"<br>";
        }
    }*/
    public function getSubjects()
    {
        $data = Subjects::all();
        return view("students",compact('data'));
    }

    public function createSubjects()
    {
        $name = new Subjects;
        $name->name = "Social Science";
        $name->save();
        echo "subject updated successfuly";
    }
    public function updateSubjects()
    {
        name::where('id', 1)->update('name'-> 'History');
        echo "subject updated successfully";
    }

}
