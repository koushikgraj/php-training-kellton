<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{

    public function addToCart(Request $request)
    {
       $cart = new Cart;

       $cart->user_id=$request->session()->get('user_login')['id'];
       $cart->product_id=$request->product_id;
       $cart->quantity=$request->quantity;

       $cart->save();
       $request->Session()->flash('message','Added To Cart Successfully.');
       return redirect('admin/store');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cartItem()
    {
       return view('admin.cart');
    }
  
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    
    public function cartItemList()
    { 
        $user_id=Session::get('user_login')['id'];
        $data= DB::table('carts')
        ->join('categories','carts.product_id','categories.id')
        ->select('categories.image','categories.product','categories.price','carts.quantity','carts.id')
        ->where('carts.user_id',$user_id)
        ->get();

        return view('admin.cart',['data'=>$data]);

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Caregory  $data
     * @return \Illuminate\Http\Response
     */
    public function removeFromCart(Request $request, $id)
    {
        $data=Cart::find($id);
        $data->delete();       
        $request->Session()->flash('message','Product Removed From Cart Successfully.');
        return redirect('admin/cart');    
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkout()
    {
        $user_id=Session::get('user_login')['id'];
        $total= DB::table('carts')
        ->join('categories','carts.product_id','categories.id')
        ->where('carts.user_id',$user_id)
        ->sum('categories.price');

        return view('admin.checkout',['total'=>$total]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function checkoutProduct(Request $request)
    {
        $user_id=Session::get('user_login')['id'];
        $data= Cart::where('user_id',$user_id)->get();

        foreach($data as $cart)
        {
        $order = new Store;
        $order->product_id=$cart->product_id;
        $order->user_id=$cart->user_id;
        $order->quantity=$cart->quantity;
        $order->country=$request->country;   
        $order->fname=$request->fname;
        $order->lname=$request->lname;
        $order->address=$request->address;
        $order->state=$request->state;
        $order->postal=$request->postal;
        $order->email=$request->email;
        $order->phone=$request->phone;
        $order->order_note=$request->order_note;

        $order->save();
        }
        $data= Cart::where('user_id',$user_id)->delete();

        return redirect('admin/thankyou');
    }


    /**
     * Display a page for register user..
     *
     * @return \Illuminate\Http\Response
     */
    public function myOrders()
    {
        $user_id=Session::get('user_login')['id'];
        $order = DB::table('orders')
        ->join('categories','orders.product_id','categories.id')
        ->where('orders.user_id',$user_id)
        ->get();

        return view('admin.myorder',['order'=>$order]);
    }

/**
     * Shows searched product.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request)
    {
        \DB::enableQueryLog(); // Enable query log
       $data = Category::where('product', 'LIKE', '%'.$request->input('query').'%')->get();
         //$data = Category::where('product','like ', '"%'.$request->input('query').'%"')->get();
        //  dd(\DB::getQueryLog()); // Show results of log
        // dd($data);
         return view('admin/search' , ['data'=>$data]);
    }

}




