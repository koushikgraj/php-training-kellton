<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Models\ProfilePage;


class ProfilePageController extends Controller {
//profilepageform for storing Data in Database

   public function ProfilePage(Request $req) {
    
    
        $req = ProfilePage::all();
        return view ('ProfilePage')->with('req', $req);
    }
//====================================================================================================//
//going to details form for storing Data in Database

    public function show_profile_data()
    {
        $posts = ProfilePage::all();
        return view ('showProfilePage')->with('posts', $posts);
    }
//====================================================================================================//
    //edit form for storing Data in Database
      public function editProfilePagedata($id)
   {
       $item = ProfilePage::find($id);
       
       return view('editProfilePage')->with('item',$item);
   
   }
    //====================================================================================================//
//view form for storing Data in Database

   public function viewProfilePagedata($id)
   {
       $item = ProfilePage::find($id);
       
       return view('viewProfilePage')->with('item',$item);
   
   }
//====================================================================================================//
//delete form for storing Data in Database
      
     
   public function destroy($id)
    {
        ProfilePage::destroy($id);
        
       return redirect('gotoqdetail')->with('flash_message', 'Student deleted!');  
    }
//=======================================================================================================
//update form for storing Data in Database
   public function updateProfilePage(Request $request)
   {
      $item= ProfilePage::find($request->id);
      $item->name=$request->name;
      $item->contact=$request->contact;
      $item->address=$request->address;
      $item->email=$request->email;
      $item->dob=$request->dob;
      $item->employee_id=$request->employee_id;
      $item->date_of_joining=$request->date_of_joining;
      $item->company_name=$request->company_name;
      $item->location=$request->location;
      $item->employee_type=$request->employee_type;
     
      $item->save();
    return redirect('gotoqdetail');
   }
//=======================================================================================================
//update form for storing Data in Database

   public function ProfilePagestore(Request $req) {
   // public function (Request $request){
    
        $input = $req->all();
        ProfilePage::create($input);
        return view('ProfilePage')->with('flash_message', 'Student Addedd!');  
    
      print_r($req->all());
      $this->validate($req,[
         'name'=>'required',
         'contact'=>'required',
         'address'=>'required',
         'email'=>'required',
         'dob'=>'required',
         'employee_id'=>'required',
         'date_of_joining'=>'required',
         'company_name'=>'required',
         'location'=>'required',
         'employee_type'=>'required'
      ]);

      $data = new ProfilePage();
      $data ->name=$req ->name;
      $data ->contact=$req ->contact;
      $data ->address=$req ->address;
      $data ->email=$req ->email;
      $data ->dob=$req ->dob;

      $data ->employee_id=$req ->employee_id;
      $data ->date_of_joining=$req ->date_of_joining;
      $data ->company_name=$req ->company_name;
      $data ->location=$req ->location;
      $data ->employee_type=$req ->employee_type;
      
      $data ->save();
      return redirect('ProfilePage');

   }
}