<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller{

    public function show($id)
    {
        return "this is my id ".($id);
    }
}