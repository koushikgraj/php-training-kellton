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
    }
//storing the skill details to database tabular form
//==============================================================================================
   public function Skillsstore(Request $req) {
   // public function (Request $request){
    
        $input = $req->all();
        Skills::create($input);
    
        return view('Onboarding.Skills')->with('flash_message', 'Qdata Addedd!'); 
    
      print_r($req->all());
      $this->validate($req,[
         'Programming_language'=>'required',
         'Proficiency_level'=>'required',
         'Certification'=>'required',
         'Work_experience'=>'required' 
      ]);

      $data = new Skills();
      $data ->Programming_language=$req ->Programming_language;
      $data ->Proficiency_level=$req ->Proficiency_level;
      $data ->Certification=$req ->Certification;
      $data ->Work_experience=$req ->Work_experience;
      $data ->save();
      return redirect('showskill');
   }
   
//show skill details from databse
//============================================================================
    public function gotoqdetail()
    {
        $posts = Skills::all();
        return view ('Onboarding.showskill')->with('posts', $posts);
    }
   
//creating skill details to database
//============================================================================
function Skillcreate(){
    
    return view('showskill');
}
//deleting skill details in database
//=================================================================================
     public function destroy($id)
     {
         Skills::destroy($id);
         return redirect('gotoqdetail')->with('flash_message', 'Student deleted!');  
     }

//viewing skill details in database
//========================================================================================
     public function viewSkilldata($id)
   {
       $item = Skills::find($id);
       
       return view('Onboarding.viewskilldata')->with('item',$item);
   
   }
//editing skill detials in database
//===========================================================================================
   public function editskilldata($id)
   {
       $item = Skills::find($id);
       
       return view('Onboarding.editskilldata')->with('item',$item);
   
   }
//updation of skill details in database
//============================================================================================
   public function updateSkilldata(Request $request)
   {
      $item= Skills::find($request->id);
      $item->Programming_language=$request->Programming_language;
      $item->Proficiency_level=$request->Proficiency_level;
      $item->Certification=$request->Certification;
      $item->Work_experience=$request->Work_experience;
      $item->save();
    return redirect('gotoqdetail');
   }
}
