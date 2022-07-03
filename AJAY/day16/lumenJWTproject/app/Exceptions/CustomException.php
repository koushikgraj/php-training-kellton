<?php
namespace App\Exceptions;
use Exception;
class CustomException extends Exception
{   
    public function render($request)
    {       
        echo "<h1>Custom Ecception class</h1><br>";
        return response()->json(["error" => true, "message" => "This message is from custom exception class. ".$this->getMessage()]);       
    }
}