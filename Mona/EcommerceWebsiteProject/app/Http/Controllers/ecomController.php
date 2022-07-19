<?php

namespace App\Http\Controllers;
use App\Models\EcomModel;

use Illuminate\Http\Request;

class ecomController extends Controller
{
    function _construct(){
        if(!Session::exists('user')) {
            die ("You are not authorized user.");
            
    }
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
        public function Register(Request $req) {
            $req->validate([
                'full_name'=>'required',
                'email'=>'required',
                'mobile_no'=>'required',
                'password'=>'required',
                're_password'=>'required',
            
            ]);
    
            
            $res=new EcomModel;
            $res->full_name=$req->input('full_name');
            $res->email=$req->input('email');
            $res->mobile_no=$req->input('mobile_no');
            $res->password=$req->input('password');
            $res->re_password=$req->input('re_password');
            $res->save();
         return redirect('signup')->with('message','Sending data successfully');
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
