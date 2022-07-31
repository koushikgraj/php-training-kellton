<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Models\Category;
use App\Models\Cart;
use App\Models\Chekout;
use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */

  public function viewproduct()
  {
    $data = Category::all();
    return view('shop', ['categories' => $data]);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */

  public function detail($id)
  {
    $data = Category::find($id);
    return view('detail', ['categories' => $data]);
  }

  /**
   * Display a serach item to listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  function search(Request $req)
  {

    $data = Category::where('product_name', 'like', '%' . $req->input('query') . '%')->get();
    return view('search', ['categories' => $data]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */

  function addtocart(Request $req)
  {
    if ($req->session()->has('user')) {

      $cart = new Cart;
      $cart->user_id = $req->session()->get('user')['id'];
      $cart->category_id = $req->category_id;
      $cart->save();
      return redirect()->route('cartlist');
    } else {
      return redirect('login');
    }
  }


  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Cart  $data
   * @return \Illuminate\Http\Response
   */

  function cartlist()
  {
    $userId = Session::get('user')['id'];
    $data = DB::table('cart')
      ->join('categories', 'cart.category_id', '=', 'categories.id')
      ->where('cart.user_id', $userId)
      ->select('categories.*', 'cart.id')
      ->get();
    return view('cartlist', ['carts' => $data]);
  }


  /**
   * Remove the specified resource from storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Category  $data
   * @return \Illuminate\Http\Response
   */

  public function removecart(Request $request, $id)
  {
    $data = Cart::find($id);
    $data->delete();
    return redirect('cartlist');
  }

  /**
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */

  public function index()
  {
    return view('admin/category');
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */

  public function manage_category()
  {
    return view('admin/manage_category');
  }


  /**
   * add a product newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */

  public function addproduct(Request $req)
  {

    $product = new Category;
    $product->product_name = $req->product_name;
    $product->product_price = $req->product_price;
    $product->image = $req->image;
    $product->product_descrip = $req->product_descrip;
    $product->save();
    return back()->with('message', 'Product Add Successful!');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */

  public function showproduct()
  {
    $data = Category::all();
    return view('admin/category', ['categories' => $data]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */

  public function editcategory($id)
  {
    $categories = Category::find($id);

    return view('admin/editcategory')->with('categories', $categories);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */

  public function updateproduct(Request $request, $id)
  {

    $data = $request->except('_method', '_token', 'submit');
    $arr['product_name'] = $data['product_name'];
    $arr['product_price'] = $data['product_price'];
    $arr['product_descrip'] = $data['product_descrip'];
    $categories = Category::where('id', '=', $data['id'])->update($arr);
    if ($categories) {

      Session::flash('message', 'Update successfully!');
      Session::flash('alert-class', 'alert-success');
      return back()->with('message', 'Product Edit Successful!');
    } else {
      Session::flash('message', 'Data not updated!');
      Session::flash('alert-class', 'alert-danger');
    }

    return Back()->withInput();
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */

  public function destroy($id)
  {
    $data = Category::find($id);
    $data->delete();
    Session::flash('message', 'Delete successfully!');
    Session::flash('alert-class', 'alert-success');
    return redirect('admin/category');
  }

  /**
   * Store a information checkout newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */

  public function checkout(Request $req)
  {

    $userId = Session::get('user')['id'];
    $allcart = Cart::where('user_id', $userId)->get();
    foreach ($allcart as $cart) {
      $res = new Chekout;
      $res->category_id = $cart['category_id'];
      $res->user_id = $cart['user_id'];
      $res->fullname = $req->fullname;
      $res->email = $req->email;
      $res->address = $req->address;
      $res->city = $req->city;
      $res->state = $req->state;
      $res->zip = $req->zip;
      $res->payment_method = $req->payment_method;
      $res->save();
    }
    return redirect('thankyou')->with('message', 'Sending Details Successfully!');
  }


  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */

  public function proceed()
  {

    return view('thankyou')->with('message', 'Sending Details Successfully!');
  }
}
