<?php

namespace App\Http\Controllers;

use App\Models\WebModel;
use Illuminate\Http\Request;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactUs()
    {
        return view("contactUs");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        return view("myprofile");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WebModel  $webModel
     * @return \Illuminate\Http\Response
     */
    public function show(WebModel $webModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WebModel  $webModel
     * @return \Illuminate\Http\Response
     */
    public function edit(WebModel $webModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WebModel  $webModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WebModel $webModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WebModel  $webModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(WebModel $webModel)
    {
        //
    }
}
