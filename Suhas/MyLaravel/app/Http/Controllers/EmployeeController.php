<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{

    function getEmployee()
    {
        $data = Employee::all();
        return view('Employee',compact('data'));

    }

    function createEmployee()
    {
        $Employee = new Employee;
 
        $Employee->Name = "Suresh";
        $Employee->Dept = "Civil";
        $Employee->MobNo = "7636527365";
 
        $Employee->save();
        echo "Employee Added Succefully";
    }

    public function updateEmployee()
    {
        Employee::where('id', 1007)->update(['Name' => 'Supoo']);
        echo "Employee updated succesfully";
    }

    public function deleteEmployee()
    {
        Employee::where('Name', 'Rahul')->delete();
        echo "Employee deleted succesfully";
    }
}
