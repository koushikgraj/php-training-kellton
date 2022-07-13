<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OnBording;
use App\Models\OnbordingShow;
class OnbordingController extends Controller
{
    

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

//===========================Show form for storing Data in Database==========================
    public function bank()
    {
        return view('onbording.bankdetails');
    }

//===========================Show Bank Details from Database in Tabular Form==========================
    public function onbording_bank_details()
    {
        $posts = OnbordingShow::all();
        return view ('onbording.showbankdata')->with('posts', $posts);
    }

    public function index()
    {
        // $posts = OnBording::all();
        // return response()->json($posts);

        $students = OnBording::all();
        return view ('onbording.showbankdata')->with('students', $students);
    }
//================================Stores Bank Details in Database===========================================
    public function storebankdetails(Request $request)
    {
        $request->validate([
            // 'onbording_id'=>'required',
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


    public function show($id)
    {
        $student = Student::find($id);
        return view('students.show')->with('students', $student);
    }



    // ====================================================================
    // public function edit($id)
    // {

    //     // return view('onbording.editbankdata');

    //     $posts = Student::find($id);
    //     return view('onbording.editbankdata')->with('posts', $posts);
    // }
  
    public function editbankdata($id){
        $item = OnbordingShow::find($id);
  
        return view('onbording.editbankdata')->with('item',$item);
     }



    public function updatebankdata(Request $request,OnbordingController $item)
    {
        $request->validate([
            // 'onbording_id'=>'required',
            'account_type'=>'required',
            'country'=>'required',
            'ifsc_code'=>'required',
            'contact'=>'required',
            'name'=>'required',
            'location'=>'required',
            'account_number'=>'required',
        ]);
        // $item = OnbordingShow::find($id);
        // $input = $request->all();
        $item->update($request->all());
        return redirect('onbording.showbankdata')->with('flash_message', 'student Updated!');  
    }
  

    // public function updatebankdata(Request $request,$id){
    //    // $data = $request;
    //     // ->except('_method','_token','submit');
    //     $item = OnbordingShow::find($id);
    //     // $arr['date'] = $data['date'];
    //     // $arr['holiday'] = $data['holiday'];
    //     // $arr['holiday_type'] = $data['holidaytype'];
    //     $item = OnbordingShow::where('id', '=', $request['id'])->update($request->all());
    //     if($item){
  
    //        Session::flash('message', 'Update successfully!');
    //        Session::flash('alert-class', 'alert-success');
    //        return redirect('holiday');
    //     }else{
    //        Session::flash('message', 'Data not updated!');
    //        Session::flash('alert-class', 'alert-danger');
    //     }
  
    //     return Back()->withInput();
    //  }
    
  
    public function destroy($id)
    {
        Student::destroy($id);
        return redirect('student')->with('flash_message', 'Student deleted!');  
    }
}
