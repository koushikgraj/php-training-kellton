<?php

namespace App\Http\Controllers;
use App\Models\Ajax;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public  function form_submit(Request $request)
    {
       $model = new Ajax();
       $model->name=$request->post('name');
       $model->password=$request->post('password');
       $model->save();
       return $model->all();
    }
}
