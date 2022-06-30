<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use  App\Models\User;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

use App\Exceptions\InvalidOrderException;

class AuthController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'refresh', 'logout', 'storeSecret', ]]);
    }
    /**
     * Get a JWT via given credentials.
     *
     * @param  Request  $request
     * @return Response
     */
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

     /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(auth()->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'user' => auth()->user(),
            'expires_in' => auth()->factory()->getTTL() * 60 * 24
        ]);
    }

    // Encryption nd Decryption

    public function storeSecret()
    {
 
        $name = "Aditi";
        $encrypted_name = Crypt::encrypt($name);
        echo $encrypted_name;

        echo "<br>";
        $decrypted_name = Crypt::decrypt($encrypted_name);
        echo $decrypted_name;
    }

    // Exception Handling

    /**
 * Register the exception handling callbacks for the application.
 *
 * @return void
 */
  /*  public function register()
    {
        $this->reportable(function (InvalidOrderException $e) {
            //
        })->stop();
         
        $this->reportable(function (InvalidOrderException $e) {
            return false;
        });
    }*/

  /*  protected function context()
    {
        return array_merge(parent::context(), [
        'foo' => 'bar',
        ]);
    }

    public function context1()
    {
        return ['order_id' => $this->orderId];
    }*/

}