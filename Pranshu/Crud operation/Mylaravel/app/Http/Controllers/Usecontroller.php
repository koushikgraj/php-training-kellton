<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;

class Usecontroller extends Controller
{
    public function index($id)
    {
       return "This is controller with id: ".$id;
    }

}
?>