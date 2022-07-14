<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OnBording;
use App\Models\OnbordingShow;
class OnbordingController extends Controller
{
    

    public function onbording_Profile()
    {
        return view('onbording.profile');
    }
    

    public function qualifications()
    {
        return view('onbording.qualifications');
    }


    public function skills()
    {
        return view('onbording.skills');
    }


    public function work_experience()
    {
        return view('onbording.workexperience');
    }

//====================================================================================================
//Show form for storing Data in Database
    public function bank()
    {
        return view('onbording.bankdetails');
    }
//=====================================================================================================
//======================================================================================================
//Show Bank Details from Database in Tabular Form
    public function onbording_bank_details()
    {
        $posts = OnbordingShow::all();
        return view ('onbording.showbankdata')->with('posts', $posts);
    }
//=====================================================================================================
//=======================================================================================================
//Stores Bank Details in Database   
public function storebankdetails(Request $request)
    {
        $request->validate([
            'account_type'=>'required',
            'country'=>'required',
            'ifsc_code'=>'required',
            'contact'=>'required',
            'name'=>'required',
            'location'=>'required',
            'account_number'=>'required',
        ]);
        $input = $request->all();
        OnBording::create($input);
        return view('onbording.bankdetails')->with('message', 'Successfully Contact Added!'); 
    }
//==========================================================================================================  
//========================================================================================================  
//EDIT page is loading perfectly   
public function editbankdata($id)
     {
        $item = OnbordingShow::find($id);
        return view('onbording.editbankdata')->with('item',$item);
     }
//=========================================================================================================
//=========================================================================================================
// Update is Working absolutly fine
    public function updatebankdata(Request $request)
    {
       $item= OnbordingShow::find($request->id);
       $item->account_type=$request->account_type;
       $item->country=$request->country;
       $item->ifsc_code=$request->ifsc_code;
       $item->contact=$request->contact;
       $item->name=$request->name;
       $item->location=$request->location;
       $item->account_number=$request->account_number;
       $item->save();
     return redirect('showbankdata');
    }
  //==================================================================================================
  //======================================================================================================
  //DELETE working Perfectly
    public function destroy($id)
    {
        OnbordingShow::destroy($id);
        return redirect('showbankdata')->with('flash_message', 'Student deleted!');  
    }
//======================================================================================================
//======================================================================================================
//View is working absolutely fine
    public function viewbankdata($id)
    {
        $item = OnbordingShow::find($id);
      //  return redirect('viewbankdata')->with('flash_message', 'Student deleted!');  
        return view('onbording.viewbankdata')->with('item',$item);
    }
//=======================================================================================================
}
