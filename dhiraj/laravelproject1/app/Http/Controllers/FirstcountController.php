<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class FirstcountController extends Controller
{
  function getSub()
    {
        $data=Student::all();
        return view("stud", compact('data'));
    }
    // function first(){
    //     // echo "<h1>This is a FIRST controller</h1>";
    //     // dd(Subject::readTbl());
    //     foreach(Dhiraj::readTbl() as $tblObj) {
    //         echo $tblObj->subject;
    // echo "<br>";
        }

