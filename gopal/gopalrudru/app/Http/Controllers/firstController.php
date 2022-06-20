<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subjects;



class firstController extends Controller
{
    public function first(){
        echo 'this is first controller';
    }
    public function getSubjects()
    {
        $data=Subjects::all();
        return view('krishna',compact('data'));

    }

    public function createSubjects()
    {
        $subject = new Subjects;
        $subject->subject = "Tamil";
        $subject->marks = "55";
        $subject->age = "18";   
        $subject->save();
        echo "Subject created succesfully";
    }

    public function updateSubjects()
    {
        Subjects::where('id', 1)->update(['subject' => 'english']);
        Subjects::where('id', 1)->update(['marks' => '65']);
        Subjects::where('id', 1)->update(['age' => '17']);
        Subjects::where('id', 2)->update(['marks' => '75']);
        Subjects::where('id', 2)->update(['age' => '23']);
        Subjects::where('id', 6)->update(['marks' => '83']);
        Subjects::where('id', 6)->update(['age' => '21']);
        Subjects::where('id', 7)->update(['age' => '20']);
        echo "Subject updated succesfully";
    }

    public function deleteSubjects()
    {
        Subjects::where('id', 6)->delete();
        echo "Subject deleted succesfully";
    }
   
}