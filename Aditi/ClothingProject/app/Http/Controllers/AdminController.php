<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Hash;
use Auth;

class AdminController extends Controller
{
    public function login(){
        // echo Hash::make('admin@123');
        // exit();
        return view('adminlogin');
    } 
    public function makeLogin(Request $request){
        $data = array(
            'email' =>$request->email,
            'password'=> $request->password,
            'role'=>'admin'
        );
        if(Auth::attempt($data)) {
            return redirect('admin');
        }
        else{
            return back()->witherrors(['message'=>'invalid email or password']);
        }
    }
    public function adminlogout()
     {
        Session::flush();
        Session::forget('user');
        return redirect('adminlogin');
     }

}