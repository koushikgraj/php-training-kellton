<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\company;

class firstcontroller extends Controller
{
    public function index()
    {
        echo "i am in FirstController index method";
    }
    
     public function getcompany()
     {
        $data = company::all();
        return view("employee",compact('data'));
    }
     public function createcompany()
     {
        $employee = new employee;
        $employee->name = "pqr";
        $employee->save();
        echo"new emloyee updated successfully";
     }

     public function updatecompany()
     {
        employee::where('id',3)->update(['employee'=> 'vams']);
        echo " company new employee updated successfully";
     }


}