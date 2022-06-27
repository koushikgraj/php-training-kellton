<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyMod;

class MyController extends Controller
{
    function home()
    {
        return view('home');
    }


    function about()
    {
        return view('about');
    }

    function contact()
    {
        return view('contact');
    }
    function myprofile()
    {
        return view('myprofile');
    }

    public function register(RegisterRequest $request) 
    {
        $user = User::create($request->validated());

        auth()->login($user);

        return redirect('/')->with('success', "Account successfully registered.");
    }   


    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'date'=>'required',
            'contact'=>'required',
            'country'=>'required',
            'address'=>'required',
            'subject'=>'required',
            'message'=>'required',
        ]);
        $input = $request->all();
        MyMod::create($input);
        return redirect('contact')->with('message', 'Successfully Contact Added!');  
    }
    
    public function show($id)
    {
        $student = MyMod::find($id);
        return view('show')->with('students', $student);
    }
}
