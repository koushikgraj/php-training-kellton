<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request)
    {
            $user= new User;
            $user->name=$request->name;
            $user->number=$request->number;
            $user->email=$request->email;
            $user->password=md5($request->password);
            $user->save();
            return redirect('login');

    }
    public function login(Request $request)
    {
        $email=$request->post('email');
        $password=$request->post('password');
      
        $data = User::where([ 'email'=>$email , 'password'=>md5($password)])->get()->first();
        
    if(!empty($data))
     {
        Session::put('user',$data);
        Session::put('id',$data->id);
        // $name = Admin::select('username')->where('id','=',$user->id)->first();
        return redirect('index');
     }  
    }

    public function logout()
     {
        Session::flush();
        Session::forget('user');
        return redirect('login');
     }
}    
