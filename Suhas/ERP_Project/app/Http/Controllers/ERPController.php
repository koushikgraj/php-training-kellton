<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Detail;
use App\Models\Login;
use Crypt;

class ERPController extends Controller
{
    public function addUser(Request $req) {
        // print_r($req->all());
        // $this->validate($req,[
        //    'name'=>'required|min:3',
        //    'email'=>'required',
        //    'dob'=>'required',
        //    'city'=>'required',
        //    'state'=>'required',
        //    'country'=>'required',
        //    'mobile'=>'required',
        //    'address'=>'required',
        //    'permant_address'=>'required',
        //    'marital_satus'=>'required',
        //    'gender'=>'required',
        //    'education'=>'required',
        //    'year'=>'required'

        // ]);
      //  dd(Session::get('user'));

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
        $data->marital_satus=$req->marital_satus;
        $data->gender=$req->gender;
        $data->education=$req->education;
        $data->year=$req->year;

        $data->save();
        return redirect('layout');
    } else {
        echo "you are not autherised user";
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
            echo "you are not autherised user";
        }
     }


     public function logoutUser()
     {
        Session::flush();
        Session::forget('user');
        return redirect('login');
     }

     public function getUser()
     {
        $data = Detail::all();
        return view('get', ['data'=>$data]);
     }
}
   //1st = compare username and password wih login table
   //2nd = if mismatch print error
   //3rd = if login matches set user info in session variable redirect to dashboard
   // ......$request->session()->put('key', 'value');....use Illuminate\Support\Facades\Session;
 // Session::set('variableName', $value); 

