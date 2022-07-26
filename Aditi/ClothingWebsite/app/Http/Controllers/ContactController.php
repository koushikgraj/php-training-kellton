<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Models\contact;

class ContactController extends Controller
{
    public function showContact() {
        return view('index');
     }
     public function contactform(Request $req) {
        print_r($req->all());
        
        $data = new contact();
        $data ->Name=$req ->Name;
        $data ->Email=$req ->Email;
        $data ->Subject=$req ->Subject;
        $data ->Message=$req ->Message;
        $data ->save();
        return redirect('contact');
     }
}
