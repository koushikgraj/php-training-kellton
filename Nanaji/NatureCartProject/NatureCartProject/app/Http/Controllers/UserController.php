<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
// use DB;
use Illuminate\Support\Facades\Session;
// use Illuminate\Support\Facades\Validator;
// use Illuminate\Support\Facades\Hash;


use Illuminate\Http\Request;

class UserController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    public function login(Request $request)
    {
        $email = $request->post('email');
        $password = $request->post('password');
        $data = User::where(['email' => $email, 'password' => md5($password)])->get()->first();
        if (!empty($data)) {
            Session::put('user', $data);
            Session::put('id', $data->id);
            return redirect('index');
        } else {
            return back()->witherrors(['message' => 'invalid email or password']);;
        }
    }

    /**
     * register a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function register(Request $request)
    {

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->number = $request->number;
        $user->password = md5($request->password);

        $user->save();
        return back()->with('message', 'Registration Successfully!');
    }


    /**
     * Log out account user.
     *
     * @return \Illuminate\Routing\Redirector
     */

    public function logoutUser()
    {
        Session::flush();
        Session::forget('user');
        // Session::forget('user_id');
        // Session::forget('is_manager');
        return redirect('login');
    }

    /**
     * Store a contact details for user newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function contact(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        $res = new Contact;
        $res->name = $req->input('name');
        $res->email = $req->input('email');
        $res->subject = $req->input('subject');
        $res->message = $req->input('message');
        $res->save();
        return redirect('contact')->with('message', 'Sending Feedback Successfully!!');
    }
}
