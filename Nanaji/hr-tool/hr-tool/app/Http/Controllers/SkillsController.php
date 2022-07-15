<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Models\Skills;


class SkillsController extends Controller {
//    public function showform() {
//       return view('index');
//    }
   public function Skills(Request $req) {
    //public function index()
    
        $req = Qualification::all();
        return view ('Qualification')->with('req', $req);
    }

   public function Skillsstore(Request $req) {
   // public function (Request $request){
    
        $input = $req->all();
        Skills::create($input);
    
        return view('Skillscreate')->with('flash_message', 'Qdata Addedd!');  
    
      print_r($req->all());
      $this->validate($req,[
         'Programming_language'=>'required',
         'Proficiency_level'=>'required',
         'Certificate'=>'required',
         'Work_experience'=>'required'
        
         
      ]);

      $data = new Skills();
      $data ->Programming_language=$req ->Programming_language;
      $data ->Proficiency_level=$req ->Proficiency_level;
      $data ->Certificate=$req ->Certificate;
      $data ->Work_experience=$req ->Work_experience;
    

      
      $data ->save();
      return redirect('Skillsstore');
   }
}