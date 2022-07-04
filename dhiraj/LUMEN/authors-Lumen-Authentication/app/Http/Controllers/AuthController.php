<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

// use App\Exceptions\InvalidOrderException;

class AuthController extends Controller
{
    /**
     * Store a new user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function register(Request $request)
    {



        //validate incoming request 
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        try {

            $user = new User;
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $plainPassword = $request->input('password');
            $user->password = app('hash')->make($plainPassword);

            $user->save();




            // $this->reportable(function (InvalidOrderException $e) {
            //     //
            // });



            
            //return successful response
            return response()->json(['user' => $user, 'message' => 'CREATED'], 201);

        } catch (\Exception $e) {
            //return error message
            return response()->json(['message' => 'User Registration Failed!'], 409);
        }

    }
   /* a JWT via given credentials.
    *
    * @param  Request  $request
    * @return Response
    */
   public function login(Request $request)
   {
         //validate incoming request 
       $this->validate($request, [
           'email' => 'required|string',
           'password' => 'required|string',
       ]);

       $credentials = $request->only(['email', 'password']);

       if (! $token = Auth::attempt($credentials)) {
           return response()->json(['message' => 'Unauthorized'], 401);
       }

       return $this->respondWithToken($token);
   }


   public function storeSecret()
   {

       $name = "Dhiraj";
       $encrypted_name = Crypt::encrypt($name);
       echo $encrypted_name;

       echo "<br>";
       $decrypted_name = Crypt::decrypt($encrypted_name);
       echo $decrypted_name;

   }

   


}