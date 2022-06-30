<?php
namespace App\Exceptions;
use Exception;
class SampleException extends Exception
{   public function render()
    {
        return view()->make('errors.404Sample');
    }
}