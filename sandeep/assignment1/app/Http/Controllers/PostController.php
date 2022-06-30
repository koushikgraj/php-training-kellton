<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nanajimodel;


class postcontroller extends Controller
{
    //
    public function store(Request $request){
    
    
        $input = $request->all();
        Nanajimodel::create($input);
        return redirect('profile');  
    }
    function profile()
    {
        return view('profile');
    }   
}    

    

