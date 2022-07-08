<?php
namespace App\Exceptions;
use Exception;
use Illuminate\Support\Facades\Log;
class SampleException extends Exception
{   

    public function report()
    {
        Log::emergency("Logging message from Sample exception report method");
    }

   /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render()
    {
        return view()->make('errors.404Sample');
    }
}