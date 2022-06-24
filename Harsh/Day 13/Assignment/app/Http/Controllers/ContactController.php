<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;


class ContactController extends Controller
{
    //
    function addContact(Request $req){
        $req->validate([
            'name'=>'required|min:3|max:30',
            'email'=>'required',
            'date'=>'required',
            'city'=>'required',
            'state'=>'required',
            'country'=>'required',
            'subject'=>'required',
            'massage'=>'required'
        
        ]);
        dd($req);
        $data=new contact;
        $data->name=$req->name;
        $data->email=$req->email;
        $data->date=$req->date;
        $data->city=$req->city;
        $data->state=$req->state;
        $data->country=$req->country;
        $data->subject=$req->subject;
        $data->massage=$req->massage;
        $data->save();
        return redirect('layout');
       
        }
}
