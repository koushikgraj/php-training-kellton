<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Illuminate\Http\Request;

class CustomAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // echo"hellofrom middleware";
         $path=$request->path();
         if(($path=="login" || $path=="register") && Session::get('form'))
         {
            return redirect('/');
         }
         else if(($path!="login" && !Session::get('form')) && ($path!="register" && !Session::get('form')))
         {
            return redirect('login');
         }
                return $next($request);
    }
}
