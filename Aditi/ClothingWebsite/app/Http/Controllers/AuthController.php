<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Contracts\Session\Session;

class AuthController extends Controller
{
    //




    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:2|max:100',
            'number' => 'required|string|min:10',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|min:6|confirmed'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $user = User::create([
            'name' => $request->name,
            'number' => $request->number,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        // return response()->json([
        //     'message' => 'User registered Successfully',
        //     'user' => $user,
        //     'URL' => '/login',
        // ]);

        return redirect('/login')->with(json_encode(['data' => [


            'message' => 'User registered Successfully',
            'user' => $user,
        ]]));
    }

    public function login(Request $request)
    {
        $email=$request->post('email');
        $password=$request->post('$password');

        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string|min:6'
        ]);

        $data = Admin::where([ 'email'=>$email , 'password'=>md5($password)])->get()->first();
        if(!empty($data))
         {
            Session::put('user',$data);
            Session::put('id',$data->id);
            // $name = Admin::select('username')->where('id','=',$user->id)->first();
            // Session::put('user_first_name',ucfirst($data->username));
            // return redirect('admin/home');
            return redirect('index');
         }
         else{
            return redirect('login');
         }
        // if ($validator->fails()) {
        //     return response()->json($validator->errors(), 400);
        // }

        // if (!$token = auth()->attempt($validator->validated())) {
        //     // return response()->json(['error' => 'unauthorized']);
        //     return redirect('/signup');
        // }
        return $this->respondWithToken($token);
    }

    protected function respondWithToken($token)
    {



        return redirect('/index')->with(json_encode(['data' => [

            'access_token' => $token,
            'token_type' => 'bearer',

        ]]));
    }

    public function profile()
    {
        return response()->json(auth()->user());
    }
}
