<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Cart;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkout()
    {
        return view('admin.checkout');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function checkoutProduct(Request $request)
    {
        $data = new Store;
        $data->country=$request->country;
        $data->fname=$request->fname;
        $data->lname=$request->lname;
        $data->address=$request->address;
        $data->state=$request->state;
        $data->postal=$request->postal;
        $data->email=$request->email;
        $data->phone=$request->phone;

        $data->save();
        return redirect('admin/thankyou');
    }


      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addCategory()
    {
      
        return view('admin.addcategory');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addproductCategory(Request $request)
    {
        $data = new Category;
        $data->product=$request->product;
        $data->description=$request->description;
        $data->price=$request->price;
        $data->image=$request->image;

        $data->save();
        $request->Session()->flash('message','Product Added Successfully.');
        return redirect('admin/category/addcategory');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $data
     * @return \Illuminate\Http\Response
     */
    public function categoryList()
    {
       if(Session::exists('user_login')) {
           $data = Category::all();
           return view('admin.categorylist', ['data'=>$data]);

       } else {
        $request->Session()->flash('message','Data is not Available.');
        return redirect('admin/addcategory');

       }
    }

    public function storeList()
    {
       if(Session::exists('user_login')) {
           $list = Category::all();
           return view('admin.store', ['data'=>$list]);

       } else {
        $request->Session()->flash('message','Data is not Available.');
        return redirect('admin/addcategory');

       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Caregory  $data
     * @return \Illuminate\Http\Response
     */
    public function deleteCategory(Request $request, $id)
    {
        $data=Category::find($id);
        $data->delete();
        $request->Session()->flash('message','Deleted Successfully.');
        return redirect('admin/category/list');
    }

    public function editCategory($id)
    {
       $data = Category::find($id);
       return view('admin.modifycategory')->with('data', $data);

     }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $data
     * @return \Illuminate\Http\Response
     */
    public function modifyCategory(Request $request, $id)
    {
    //    

    }

    public function addToCart(Request $request)
    {
       $cart = new Cart;

       $cart->user_id=$request->session()->get('user_login')['id'];
       $cart->product_id=$request->product_id;
       //$cart->quantity=$request->quantity;

       $cart->save();

       return redirect('admin/store');

    }

    public function cartItem()
    {
       return view('admin.cart');
    }
}








