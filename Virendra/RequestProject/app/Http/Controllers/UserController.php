<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

use App\Http\Controllers\UserController;

class UserController extends Controller{
    function testRequest(Request $request){

    dump($request->input());
     return $name = $request->input('name');
    return $input = $request->collect();
    return $input = $request->all();
   return dump($name = $request->input('name', 'Sally'));
    return dump($name = $request->query('name'));
   return dump($name = $request->input('user.name'));
  return dump($input = $request->only('user', 'password'));
    }


}
