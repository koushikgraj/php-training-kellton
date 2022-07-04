<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
        //
        $products = Product::all();
        return response()->json($products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $products = Product::all();
        return response()->json($products);
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

        $this->validate($request, [
            'title' => 'required',
            'price' => 'required',
            'photo' => 'required',
            'description' => 'required'
        ]);

        $product = new Product();

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $allowedFileExtention = ['pdf', 'jpg', 'png'];
            $extention = $file->getClientOriginalExtension();
            $check = in_array($extention, $allowedFileExtention);

            if ($check) {
                $name = time() . $file->getClientOriginalName();
                $file->move('images', $name);
                $product->photo = $name;
            }
        }



        $product->title = $request->input('title');
        $product->price = $request->input('price');
        $product->description = $request->input('description');

        $product->save();
        return response()->json($product);
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
        $product = Product::find($id);
        return response()->json($product);
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

        $this->validate($request, [
            'title' => 'required',
            'price' => 'required',
            'photo' => 'required',
            'description' => 'required'
        ]);

        $product = Product::find($id);


        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $allowedFileExtention = ['pdf', 'jpg', 'png'];
            $extention = $file->getClientOriginalExtension();
            $check = in_array($extention, $allowedFileExtention);

            if ($check) {
                $name = time() . $file->getClientOriginalName();
                $file->move('images', $name);
                $product->photo = $name;
            }
        }


        $product->title = $request->input('title');
        $product->price = $request->input('price');
        $product->description = $request->input('description');





        $product->save();
        return response()->json($product);
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
        $product = Product::find($id);
        $product->delete();
        return response()->json('Product deleted successfully');
    }
}
