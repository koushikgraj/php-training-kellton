<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Models\form;

class ValidationController extends Controller {
   public function showform() {
      return view('index');
   }
   public function validateform(Request $req) {
      print_r($req->all());
      $this->validate($req,[
         'name'=>'required|min:3',
         'email'=>'required',
         'dob'=>'required',
         'city'=>'required',
         'state'=>'required',
         'country'=>'required',
         'subject'=>'required',
         'message'=>'required'
      ]);

      $data = new form();
      $data ->name=$req ->name;
      $data ->email=$req ->email;
      $data ->dob=$req ->dob;
      $data ->city=$req ->city;
      $data ->state=$req ->state;
      $data ->country=$req ->country;
      $data ->subject=$req ->subject;
      $data ->message=$req ->message;
      $data ->save();
      return redirect('contact');
   }
}