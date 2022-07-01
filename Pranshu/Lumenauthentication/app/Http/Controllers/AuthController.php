<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login(Request $req)
    {
        $email = $req->email;
        $password = $req->password;

        // check if field is empty or not

        if (empty($email) or empty($password)) {
            return response()->json(['status' => 'error', 'message' => 'You must fill all fields']);
        }

        $credentials = request(['email', 'password']);

        if (!$token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            // 'expires_in' => auth()->factory()->getTTL() * 60,
            'expires_in' => auth()->thread::factory()->getTTL() * 60
        ]);
    }
}
