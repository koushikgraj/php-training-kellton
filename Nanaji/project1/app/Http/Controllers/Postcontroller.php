<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class Postcontroller extends Controller
{
    public function insert(Request $req){
        $name=$req->input('name');
        $email=$req->input('email');
        $state=$req->input('state');

        Student::insert([
            'name'=>$name,
            'email'=>$email,
            'state'=>$state
        ]);
        //return redirect('insert');
    }
}
