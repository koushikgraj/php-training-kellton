<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leave;
use App\Models\Login;

class LoginController extends Controller
{
    //
    function _construct(){
        if(!Session::exists('user')) {
            die ("You are not authorized user.");
            
    }
}
  
    function saveleave(Request $req){
        $leave= New Leave;
        $leave->user=$req->user;
        $leave->ltype=$req->ltype;
        $leave->sdate=$req->sdate;
        $leave->edate=$req->edate;
        $leave->reason=$req->reason;
        $leave->save();
        Leave::create($req->all());
     
        return redirect('admin')->with('message','Sending data successfully');
     }
     function show(){
        $data= Leave::all();
        return view('admin',['leaves'=>$data]); 

    }

    public function login(Request $request)
    {
        //dd($request);

        $this->validate($request, [
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

      $user =  Login::where('username','=',$request->username)->where('password','=',$request->password)->first();
     // dd($user);
      return redirect('admin');
        //echo "succefully logged";
    }

    public function loginUser()
     {
        return view('login');
     }

     public function User()
     {
        return view('admin');
     }
// for Admin view details

function viewDetails($id){
    //dd($leave);
    // $leave=Leave::find($req->id);
    // $leave->user=$req->user;
    // $leave->ltype=$req->ltype;
    // $leave->sdate=$req->sdate;
    // $leave->edate=$req->edate;
    // $leave->reason=$req->reason;
    // $leave->save();
   // return redirect('list');
   $data =Leave::find($id);
   return view('view-details',['leave'=>$data]);
//    dd($data);
//   Leave::find($id);
}

 
}



