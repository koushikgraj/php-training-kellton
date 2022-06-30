<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use  App\Models\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use App\Exceptions\CustomException;
use App\Exceptions\SampleException;
use Illuminate\Support\Facades\Log;



class AuthController extends Controller{

    public function __construct()
    {   
        $this->middleware('auth:api', ['except' => ['login', 'refresh', 'logout','topSecret','testExeception']]);
    }

    public function login(Request $request)
    {

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

    public function me()
    {
        return response()->json(auth()->user());
    }

    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'user' => auth()->user(),
            'expires_in' => auth()->factory()->getTTL() * 60 * 24
        ]);
    }

    public function topSecret()
    {
        $name = "Suhas";
        $encrypted_name = Crypt::encrypt($name);
        echo $encrypted_name;

        echo "<br>";
        $decrypted_name = Crypt::decrypt($encrypted_name);
        echo $decrypted_name;

    }

    //************************************************************//

    public function testExeception(Request $request)
    {
      /* if (!$request->is('api/*')) {
            throw new CustomException('Your are not using api in your URL.');
        }*/

        try {
            if($request->method() != 'POST'){
                Log::notice("User is trying to access get method in AuthController::testExeception();");
              throw new SampleException();  
            }else{
                echo "We are accessing post method";
            }
        }
        catch(Exception $e) {
            //re-throw exception
            throw new SampleException();
        }

        $message = "Testing different type of Laravel/Lumen logs";
        Log::emergency($message);
        Log::alert($message);
        Log::critical($message);
        Log::error($message);
        Log::warning($message);
        Log::notice($message);
        Log::info($message);
        Log::debug($message);
    }
}