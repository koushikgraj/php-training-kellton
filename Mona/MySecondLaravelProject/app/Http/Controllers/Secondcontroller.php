<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;

class secondController extends Controller
{
public function getmembers()
    {
        $data = member::all();
        return view("member",compact('data'));
    }

    public function createmembers()
    {
        $name = new member;
        $name->name = "Swati"; 
        $name->save();
        echo "Member created succesfully";
    }

    public function updatemembers()
    {
        member::where('id', 1)->update(['name' => 'Sahil']);
        echo "Subject updated succesfully";
    }

    public function deletemembers()
    {
        member::where('name', 'Mona')->delete();
        echo "Member deleted succesfully";
    }
}
