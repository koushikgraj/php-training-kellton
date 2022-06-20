<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class GoodController extends Controller
{
    //
    function show(){
        $item= Course::all();
        return view('list',['cour'=>$item]);

    }
    function delete($id){
        $item = Course::find($id);
        $item->delete();
        return redirect('list');
    }
    function showdata($id){
        $item=Course::find($id);
        return view('edit',['item'=>$item]);
    }
    function update(Request $req){
        $item=Course::find($req->id);
        $item->name=$req->name;
        $item->categories=$req->categories;
        $item->duration=$req->duration;
        $item->date=$req->date;
        $item->image=$req->image;
        $data->save();
        return redirect('list');
    }
}
