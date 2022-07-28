<?php

namespace App\Http\Controllers;

use App\Models\BookedProduct;
use Illuminate\Http\Request;
use Auth;

class BookedProductController extends Controller
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
    // public function create()
    // {
        
    //         $booked_product = BookedProduct::get();
    //         return view('front.payment',compact('$booked_product'));
        
    
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = array(
            'product_id' =>$request->product_id,
            'user_id'=>Auth::user()->id,
          
            'name' =>$request->name,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
        );
        
        
        
        $create = BookedProduct::create($data);
        return redirect()->route('user_thanku');
        }
        

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookedProduct  $bookedProduct
     * @return \Illuminate\Http\Response
     */
    public function show(BookedProduct $bookedProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BookedProduct  $bookedProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(BookedProduct $bookedProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BookedProduct  $bookedProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookedProduct $bookedProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookedProduct  $bookedProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookedProduct $bookedProduct)
    {
        //
    }
}
