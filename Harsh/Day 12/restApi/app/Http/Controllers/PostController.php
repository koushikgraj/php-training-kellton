<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\harsh;

class PostController extends Controller
{
    //
    function add(Request $req){
        $data=new harsh;
        $data->name=$req->name;
        $data->class=$req->class;
        $data->address=$req->address;
        $result=$data->save();
        if($result){
            return ["result"=>"done"];
        }
        else{
            return ["result"=>"not done"];
        }
        
    }
    function update(Request $req){
        $data=harsh::find($req->id);
        $data->name=$req->name;
        $data->class=$req->class;
        $data->address=$req->address;
        $result=$data->save();
        if($result){
            return ["result"=>"updated"];
        }
        else{
            return ["result"=>"not updated"];
        }
    
    }
    function delete($id){
        $data=harsh::find($id);
        $result=$data->delete();
        if($result){
            return ["result"=>"deleted"];
        }
        else{
            return ["result"=>"not not deleted"];
        }
    }
}
