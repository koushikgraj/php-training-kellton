<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();
        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::whereNotNull('category_id')->get();
        return view('admin.product.add',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data = array(
        //     'name' =>$request->name,
        //     'category_id' => $request->category_id,
        //     'price' => $request->price,
        // );
        // // if($request->hasFile('image')){
        // //     $image = $request->file('image');
        // //     $filename = date('dmY').time().'.'.$image->getClientOriginalExtension();
        // //     $image->move(public_path("/uploads"),$filename);
        // //     $date[] =$filename;
        // // }
        // $create = Product::create($data);
        // return redirect()->route('product.create');
        $data = new Product;
        $data->name=$request->input('name');
        $data->category_id=$request->input('category_id');
        $data->price=$request->input('price');
        if($request->hasfile('image')){
            $file=$request->file('image');
            $extention=$file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('public/uploads',$filename);
            $data->image = $filename;
        }
        $data->save();
        return redirect()->route('product.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
