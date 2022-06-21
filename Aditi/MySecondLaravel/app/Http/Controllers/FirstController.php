<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;

class FirstController extends Controller
{
    public function getemployee()
    {
        $data = employee::all();
        return view("employee",compact('data'));
    }

    public function createemployee()
    {
        $employee = new employee;
        $employee->name = "Aditi"; 
        $employee->save();
        echo "New Employee created succesfully";
    }

    public function updateemployee()
    {
        employee::where('id', 2)->update(['name' => 'Agrawal']);
        echo " New Employee updated succesfully";
    }

    public function deleteemloyee()
    {
        employee::where('name', 'Aditi')->delete();
        echo "Employee deleted succesfully";
    }
}
