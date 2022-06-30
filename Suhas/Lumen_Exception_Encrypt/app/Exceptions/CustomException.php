<?php

namespace App\Exceptions;
use Exception;
class CustomException extends Exception{

    public function render($request)
    {
        echo "<h1>custom exception</h1>";
        return response()->json(['error'=>true, 'message'=>'this msg is from custom'.$this->getmessage()]);
    }
    
}