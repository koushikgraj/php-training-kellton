<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;


class AjaxController extends Controller {
/*   public function index() {
        $msg = "This is a simple message.";
        Log::debug('Loging simple ajax message.');
        Log::emergency("Testing emergency log");
        $message = "testing all log messages";
        Log::alert($message);
        Log::critical($message);
        Log::error($message);
        Log::warning($message);
        Log::notice($message);
        Log::info($message);
      return response()->json(array('msg'=> $msg), 200);
   }*/

   public function index() {
    $name = "This is a simple message.";
    Log::debug('Loging simple ajax message.');
    Log::emergency("Testing emergency log");
    $message = "testing all log messages";
    Log::alert($message);
    Log::critical($message);
    Log::error($message);
    Log::warning($message);
    Log::notice($message);
    Log::info($message);
  return response()->json(array('name'=> $name), 200);
}
        public function getname(){
            echo $_GET['name'];
        }
}