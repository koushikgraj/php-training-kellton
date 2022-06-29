<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ExController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function show()
    {
        echo "This lumen Controller";
    }
    public function store(Request $request)
    {
         // Without Query String...
          echo $request->url();
          echo "<br>";

         // With Query String...
          echo $request->fullUrl();echo "<br>";
          if ($request->isMethod('post')) {
               echo "this post method";
        
           }else{
               echo "not a post method";
           }
        
        
    }

    
}