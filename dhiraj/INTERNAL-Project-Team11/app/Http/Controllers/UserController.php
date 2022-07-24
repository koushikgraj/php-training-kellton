<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\Login;

use App\Models\User;
use Illuminate\Http\Request;
use Validator,Redirect,Response;
// Use App\User;
use App\Models\Registrtion;
use App\Models\Detail;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class UserController extends Controller
{

//===========================================================================
    public function userlogin(Request $request)
    {
        $email=$request->post('email');
        $password=$request->post('password');
        $result=Admin::where(['email'=>$email])->first();
        if($result){
            // if(Hash::check($request->post('password'),$result->password)){
        if($request->post('password')==$result->password){
                $request->session()->put('email', $result['email']);
                $request->session()->put('password', $result['password']);
                $request->session()->put('admin_id', $result['admin_id']);
        // echo session('email');
        // echo session('password');
        // echo session('admin_id');
                return redirect('login');
            }else{
                $request->session()->flash('error','Please enter correct password');
                return redirect('/');
            }
        }else{ 
            $request->session()->flash('error','Please enter valid login details');
            return redirect('/');
        }
    }
//===================================================================================



    // public function userlogin(Request $request)
    // {
    //     $this->validate($request, [
    //         'email' => 'required|string',
    //         'password' => 'required|string',
    //     ]); 

    //   $user =  Admin::where('email','=',$request->email)->where('password','=',$request->password);
    //   if(!empty($user)){
    //     // Session::put('email',$user->email);
    //     Session::put('user_id',$user->id);
    //     $name = Detail::select('name')->where('user_id','=',$user->id)->first();
    //     Session::put('admin_id',$name->admin_id);
    //     // Session::put('user_name',$request->username);
    //     // $is_manager_user = Detail::where('manager_id','=',$user->id)->count();
    //     // Session::put('is_manager',$is_manager_user>0?true:false);
    //     return redirect('admin/dashbord');

    // } else{
    //     return view('registration');
    //      }
    
    // }



//=========================================================
    public function index()
    {
        return view('admin.login');
    }  
 
    public function registration()
    {
        return view('registration');
    }
     
    public function postLogin(Request $request)
    {
        request()->validate([
        'email' => 'required',
        'password' => 'required',
        ]);
 
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }
        return Redirect::to("login")->withSuccess('Oppes! You have entered invalid credentials');
    }
 
    public function postregistration(Request $request)
    {  
        request()->validate([
        'name' => 'required',
        // 'email' => 'required|email|unique:users',
        'email' => 'required',
        'password' => 'required',
        ]);
         
        // $input = $request->all();
        // Registration::create($input);
        // return redirect('login')->with('success', 'Successfully Bank Added!'); 

        // OnBording::create($input);
        // return redirect('bankdetails')
        
        $data = $request->all();
 
        // $check = $this->create($data);
        Registrtion::create($data);
        Login::create($data);

       
        return Redirect::to("/")->withSuccess('Great! You have Successfully loggedin');
    }
     
    // public function dashboard()
    // {
 
    //   if(Auth::check()){
    //     return view('dashboard');
    //   }
    //    return Redirect::to("login")->withSuccess('Opps! You do not have access');
    // }
 

    public function dashboard()
    {
    return view('admin.dashboard');
    }
 
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }
     
    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }

}
