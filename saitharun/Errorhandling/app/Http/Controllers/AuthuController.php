<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use  App\Models\User;
use App\Exceptions\CustomException;
use App\Exceptions\SampleException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class AuthController extends Controller
{
    public function testExeception(Request $request)
    {
       /*if (!$request->is('api/')) {
            throw new CustomException('Your are not using api in your URL.');
        }
*/
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