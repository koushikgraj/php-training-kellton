<?php

namespace App\Http\Controllers;
use App\Exceptions\CustomException;
use App\Exceptions\SampleException;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
//use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;
class ExceptionController extends Controller{

    public function handle(Request $request)
    {
        try{
         if($request->method() != 'POST')
         {
             throw new SampleException();
         }
         else {
            echo "You are using post method";
         }
        }
        catch (Exception $e)
        {
             SampleException();
        }
    }

    public function Hide()
    {
        $name = "Supoo";
        $encrypted_name = Crypt::encrypt($name);
        echo "$encrypted_name";

        echo "<br>";
        $decrypted_name = Crypt::decrypt($encrypted_name);
        echo "$decrypted_name";
    }
}