<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    /**
     * Store a secret message for the user.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function storeSecret(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $user->fill([
            'secret' => Crypt::encrypt($request->secret)
        ])->save();
    }
    /*public function storeSecret()
    {
 
        $name = "sandeep";
        $encrypted_name = Crypt::encrypt($name);
        echo $encrypted_name;

        echo "<br>";
        $decrypted_name = Crypt::decrypt($encrypted_name);
        echo $decrypted_name;

    }*/
}