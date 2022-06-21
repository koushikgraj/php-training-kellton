<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tech;

class TechController extends Controller
{
    //
    function index()
    {
        echo "It's index function";

        $data = Tech::latest()->paginate(3);
       // dd($data);
        return view('tech.index',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 2);
    }
    
    function create()
    {
        echo "It's create function";
        return view('tech.create');

    }

    function store(Request $request)
    {

        $request->validate([
            'Tech_Name' => 'required',
            'Marks' => 'required',
            'Education' => 'required',
            'Description' => 'required',
            
        ]);
    
        Tech::create($request->all());
     
        return redirect()->route('tech.index')
                        ->with('success','Technology Added successfully.');
    }
    

    public function show(Tech $tech)
    {
        return view('tech.show',compact('tech'));
    }

     function edit(Tech $tech)
    {
        return view('tech.edit',compact('tech'));
    }

     function update(Request $request, Tech $tech)
    {
        $request->validate([
            'Tech_Name' => 'required',
            'Description' => 'required',
        ]);
    
        $tech->update($request->all());
    
        return redirect()->route('tech.index')
                        ->with('success','Technology updated successfully');
    }

    function destroy(Tech $tech)
    {
        $tech->delete();
    
        return redirect()->route('tech.index')
                        ->with('success','Technology deleted successfully');
        
    }

}