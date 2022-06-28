<?php

namespace App\Http\Controllers;


use App\Models\department;
use Illuminate\Http\Request;
class firstcontroller extends Controller
{
    public function show(){
        echo "This is first controller";
    }
    public function getdata(){
        return classes::all();
    }
    public function showdata(){
         $data= department::all();
          return view("department",compact("data"));
    }
    public function createdepart(){
        $department=new department;
      //  $department->Id="3";
        $department->Name="prudhvi";
        $department->Dept="Civil";
        $department->save();
        echo "successful created";
        
    }
    public function createdepart2(){
        $department=new department;
      //  $department->Id="3";
        $department->Name="Nani";
        $department->Dept="Mech";
        $department->save();
        echo "successful created";
        
    }
    public function updatedepart(){
        department::where('id', 1)->update(['Name' => 'Nanaji']);
        echo "successful updated";

    }
    public function deletedepart(){
        department::where('id',2)->delete();
        echo "successful deleted";

    }


    
    
    
}
