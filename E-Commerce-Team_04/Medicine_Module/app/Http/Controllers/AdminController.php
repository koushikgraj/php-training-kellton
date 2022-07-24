<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class AdminController extends Controller
{
 
    /**
     * Display a listing of the resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->session()->has('user_login')){
            return redirect('admin/home');
        }
        else{ 
           return view('admin.login');
        }
        return view('admin.login');
    }

    
    /**
     * Display a listing of the resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function auth(Request $request)
    {
        $username = $request->post('username'); 
        $password = $request->post('password');
        $user = Admin::where([ 'username'=>$username , 'password'=>md5($password)])->get()->first();

        if(!empty($user))
         {
            Session::put('user_login',$user);
            Session::put('user_id',$user->id);
            // $name = Admin::select('username')->where('id','=',$user->id)->first();
            Session::put('user_first_name',ucfirst($user->username));
            return redirect('admin/home');

         }
         else
         { 
            $request->Session()->flash('error','Please enter valid login details.');
            return redirect('admin');
         }

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('admin.home');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        return view('admin.store');
    }
    //read the data from db with page inition.....pass data to view ....inside view using foreach read data and replace with upload image
    //

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function logoutUser()
    {
       Session::flush();
       Session::forget('user_login');
       Session::forget('user_id');
       return redirect('admin');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('admin.register');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = new Admin;
        $data->fname=$request->fname;
        $data->lname=$request->lname;
        $data->username=$request->username;
        $data->password=$request->password;
        $data->mobile=$request->mobile;
        $data->save();
        return redirect('admin');
         
    }
   
}
