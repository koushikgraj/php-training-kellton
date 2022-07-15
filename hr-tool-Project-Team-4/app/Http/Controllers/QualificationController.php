<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Models\Qualification;

//Read Qualification Details from Database in Tabular Form
class QualificationController extends Controller {

   public function Qualication(Request $req) {
    
        $req = Qualification::all();
        return view ('Qualification')->with('req', $req);
    }
    //Show Qualification Details from Database in Tabular Form
    //==========================================================================================================  
    public function gotoqdetail()
    {
        $posts = Qualification::all();
        return view ('showqualification')->with('posts', $posts);
    }
    //Store Qualification Details into Database in Tabular Form
    //==========================================================================================================  
   public function Qualificationstore(Request $req) {
   
    
        $input = $req->all();
        Qualification::create($input);
    
        return view('Qualification')->with('flash_message', 'Qdata Addedd!');  
    
      print_r($req->all());
      $this->validate($req,[
         'Course'=>'required',
         'University'=>'required',
         'Academic_year'=>'required',
         'Year_of_passing'=>'required',
         'percentage'=>'required',
         
      ]);

      $data = new Qualification();
      $data ->Course=$req ->Course;
      $data ->University=$req ->University;
      $data ->Academic_year=$req ->Academic_year;
      $data ->Year_of_passing=$req ->Year_of_passing;
      $data ->percentage=$req ->percentage;

      
      $data ->save();
      return redirect('Qualificationstore');
   }
   //Delete Qualification Details from Database in Tabular Form
   //==========================================================================================================  
   public function destroy($id)
    {
        Qualification::destroy($id);
        return redirect('gotoqdetail')->with('flash_message', 'Student deleted!');  
    }
    //Edit Qualification Details from Database in Tabular Form
    //==========================================================================================================  
    public function editqualificationdata($id){
      $item = Qualification::find($id);

      return view('editqualificationdata')->with('item',$item);
   }
   //Update Qualification Details from Database in Tabular Form
   //==========================================================================================================  
   public function updatequalificationdata(Request $request)
   {
      $item= Qualification::find($request->id);
      $item->Course=$request->Course;
      $item->University=$request->University;
      $item->Academic_year=$request->Academic_year;
      $item->Year_of_passing=$request->Year_of_passing;
      $item->Percentage=$request->Percentage;
     
      $item->save();
    return redirect('showqualification');
   }
   //View Qualification Details from Database in Tabular Form
   //==========================================================================================================  
   public function viewqualificationdata($id)
   {
       $item = Qualification::find($id);
       
       return view('viewqualificationdata')->with('item',$item);
   }


}