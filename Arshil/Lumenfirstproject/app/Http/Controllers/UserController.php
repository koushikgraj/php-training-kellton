<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller{
    public function view($id)
    {
        return "This is Arshil's Number ".($id);
    }
}