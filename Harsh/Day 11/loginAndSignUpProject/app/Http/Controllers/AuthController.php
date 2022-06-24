<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form;
use Session;
use CustomAuth;
use Crypt;

class AuthController extends Controller
{
    function index(){
        return view('home');
    }
    function register(Request $req){
        echo Crypt::encrypt('123@abc');
        // return $req->input();
        $form = new form;
        $form->name=$req->input('name');
        $form->email=$req->input('email');
        $form->password=Crypt::encrypt($req->input('password'));
        $form->mobile=$req->input('mobile');
        $form->save();
        $req->session()->put('form',$req->input('name'));
        return redirect('/');
    }
    function login(Request $req){
        $form = form::where('email',$req->input('email'))->get();
        if(Crypt::decrypt($form[0]->password)==$req->input('password'))
        {
            $req->session()->put('form',$form[0]->name);
            return redirect('/');
        }
    }
    function logout(Request $req){
        CustomAuth::logout();
        return redirect('/');
    }
}
    

