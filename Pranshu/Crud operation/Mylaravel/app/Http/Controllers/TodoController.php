<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Todo;
use Illuminate\Http\Request;



// use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
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

        // return $request->input('name');
        $res = new Todo;
        $res->name = $request->input('name');
        $res->save();
        $request->session()->flash('success','Todo created successfully');
        return redirect('/todo');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function show(Todo $todo)
    {
        //
        return view('show')->with('todoArr', Todo::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit(Todo $todo, $id)
    {
        //
        return view('edit')->with('todoArr', Todo::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todo $todo)
    {
        //

        $res = Todo::find($request->id);
        $res->name = $request->input('name');
        $res->save();
        $request->session()->flash('success','Data updated successfully');
        return redirect('/todo');
        



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo, $id)
    {
        //
        Todo::destroy(array('id',$id));
        return redirect('/todo');

    }
}
