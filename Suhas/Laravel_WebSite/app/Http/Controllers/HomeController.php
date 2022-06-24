<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;


class HomeController extends Controller
{
    public function index()
    {
        return view('home', ['title' => 'Home Page']);
    }

    function addData(Request $req)
    {
          $Home = new Home;
          $Home->Name=$req->Name;
          $Home->email=$req->email;
          $Home->DOB=$req->DOB;
          $Home->state=$req->state;  
          $Home->city=$req->city;
          $Home->message=$req->message;
          $Home->save();
          return redirect('home');
    }

    // public function addData(Request $request)
    // {
    //     $input = $request->all();
    //     Home::create($input);
    //     return redirect('home')->with('flash_message', 'Student Addedd!');  
    // }
}
