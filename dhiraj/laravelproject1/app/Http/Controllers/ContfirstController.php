<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModFirst;

class ContfirstController extends Controller
{
    function cFun()
    {
        $data = ModFirst::all();
        return view("viewFirst", compact('data'));
    }

    function cSub(){
$name = new ModFirst;
$name->name="aaa";
$name->same();
echo "Data Created Successfully";
    }

    function uSub(){
        ModFirst::where('id',1)->update(['name'=>'dhiraj']);
        echo "Data Updated Successfully";
    }

    function dSub(){
        ModFirst::where('name','cccc')->delete();
        echo "Data Deleted Successfully";
    }
}
