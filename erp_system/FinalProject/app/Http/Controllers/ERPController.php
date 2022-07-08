<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Detail;
use App\Models\Login;
use Crypt;
use Illuminate\Support\Facades\Log;

class ERPController extends Controller
{
    public function addUser(Request $req) {
        if(Session::exists('user')) {
            //do your logic
        $data = new Detail;
        $data->name=$req->name;
        $data->email=$req->email;
        $data->dob=$req->dob;
        $data->adhar=$req->adhar;
        $data->city=$req->city;
        $data->state=$req->state;
        $data->country=$req->country;
        $data->mobile=$req->mobile;
        $data->address=$req->address;
        $data->permant_address=$req->permant_address;
        $data->marital_status=$req->marital_status;
        $data->gender=$req->gender;
        $data->education=$req->education;
        $data->year=$req->year;

        $data->save();
        return redirect('layout');
    } else {
        return view('not_authorized');
    }

     }

    public function login(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|string',
            'password' => 'required|string',
        ]); 

      $user =  Login::where('username','=',$request->username)->where('password','=',$request->password)->first();
      if(!empty($user)){
        Session::put('user',$user);
        Session::put('user_id',$user->id);
        $is_manager_user = Detail::where('manager_id','=',$user->id)->count();
        Session::put('is_manager',$is_manager_user>0?true:false);


        $message = "User '{$request->username}' logged in to ERP system.";
        Log::emergency($message);
        Log::alert($message);
        Log::critical($message);
        Log::error($message);
        Log::warning($message);
        Log::notice($message);
        Log::info($message);
        Log::debug($message);

        return redirect('ex');

    } else{
        echo "wrong user name or password";
         }
    
    }

    public function loginUser()
     {
        return view('login');
     }

     
     public function User()
     {
        if(Session::exists('user')) {
            //do your logic
            return view('add');

        } else {
            return view('not_authorized');
        }
     }


     public function logoutUser()
     {
        Session::flush();
        Session::forget('user');
        Session::forget('user_id');
        Session::forget('is_manager');
        return redirect('login');
     }

     public function getUser()
     {
        if(Session::exists('user')) {
            $data = Detail::all();
            return view('get', ['data'=>$data]);

        } else {
            return view('not_authorized');
        }
     }

     public function edit()
     {
        if(Session::exists('user')) {
            $id = Session::get('user_id');
            $data = Detail::find($id)->first();
            return view('update',['data'=>$data]);
        } else {
            return view('not_authorized');
        }
     }
     
     public function modify(Request $request, $id)
    {
        if(Session::exists('user')) {
            $request->validate([
                'name'=>'required',
                    'email'=>'required',
                   'dob'=>'required',
                    'city'=>'required',
                    'state'=>'required',
                   'country'=>'required',
                    'mobile'=>'required',
                    'address'=>'required',
                   'permant_address'=>'required',
                    'marital_satus'=>'required',
                    'gender'=>'required',
                    'education'=>'required',
                    'year'=>'required'
            ]);
            
            $data =Detail::find($id);
            
            $data->name=$request->name;
            $data->email=$requset->email;
            $data->dob=$request->dob;
            $data->adhar=$request->adhar;
            $data->city=$request->city;
            $data->state=$request->state;
            $data->country=$request->country;
            $data->mobile=$request->mobile;
            $data->address=$request->address;
            $data->permant_address=$request->permant_address;
            $data->marital_satus=$request->marital_satus;
            $data->gender=$request->gender;
            $data->education=$request->education;
            $data->year=$request->year;
            $data->save();
            return redirect('get')->with('msg', 'updated successfully');
        } else {
            return view('not_authorized');
        }
}
}
   //1st = compare username and password wih login table
   //2nd = if mismatch print error
   //3rd = if login matches set user info in session variable redirect to dashboard
   // ......$request->session()->put('key', 'value');....use Illuminate\Support\Facades\Session;
 // Session::set('variableName', $value); 