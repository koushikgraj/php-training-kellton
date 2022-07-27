<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;


class AdminController extends Controller
{
    //

    public function index()
    {
        return view('login');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:2|max:100',
            'password' => 'required|string|min:6'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $user = Admin::create([
            'name' => $request->name,
            'password' => Hash::make($request->password)
        ]);



        return redirect('/login')->with(json_encode(['data' => [


            'message' => 'User registered Successfully',
            'user' => $user,
        ]]));
    }








    public function login(Request $request)

    {


        $name = $request->post('name');
        $password = $request->post('password');



        $user = Admin::where(['name' => $name, 'password' => md5($password)])->get();
        if (!empty($user)) {
            Session::put('user', $user);
            // Session::put('user_id', $user->id);
            return redirect('/dashboard');
        } else {
            echo "wrong credentials";
        }
    }
}
