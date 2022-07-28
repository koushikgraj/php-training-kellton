<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Session;
 use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Category;
use Hash;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use App\Models\Cart;
use App\Models\Contact;
// use Session;


class CategoryController extends Controller
{
    function savecategory(Request $req){

        $categories= New Category;
        $categories->id=$req->id;
        $categories->CategoryName=$req->CategoryName;
        $categories->Description=$req->Description;
        $categories->Image=$req->Image;
        $categories->Price=$req->Price;
        $categories->save();
        //Category::create($req->all());
        return redirect('adcategory')->with('message','Sending data successfully');
     }

     function show(){
        $data= Category::all();
        return view('adproduct',['categories'=>$data]); 

    }

    function saveusercategory(Request $req){

        $categories= New Category;
        $categories->id=$req->id;
        $categories->CategoryName=$req->CategoryName;
        $categories->Description=$req->Description;
        $categories->Image=$req->Image;
        $categories->Price=$req->Price;
        $categories->save();
        //Category::create($req->all());
        return redirect('category')->with('message','Sending data successfully');
     }

     function usershow(){
        $data= Category::all();
        return view('category',['categories'=>$data]); 

    }

    // edit details of the products by admin

    public function edit(Category $category, $id)
    {
        return view('edit')->with('category', Category::find($id));
    }


    public function update(Request $req, $id)
    {
        $res = Category::find($id);
        $res->id = $req->input('id');
        $res->CategoryName = $req->input('CategoryName');
        $res->Description = $req->input('Description');
        $res->save();
        return redirect('adproduct');
    }


    public function destroy(Category $category, $id)
    {
        Category::destroy(array('id', $id));
        return redirect('adproduct');
    }

    // Save admin details

    function saveadmin(Request $req){

        $categories= New Category;
        $categories->CategoryId=$req->CategoryId;
        $categories->CategoryName=$req->CategoryName;
        $categories->Description=$req->Description;
        $categories->Image=$req->Image;
        $categories->Price=$req->Price;
        $categories->save();
        //Category::create($req->all());
        return redirect('admin')->with('message','Sending data successfully');
     }

     function adminshow(){
        $data= Category::all();
        return view('admin',['categories'=>$data]); 

    }

    function saveadminlay(Request $req){

        $categories= New Category;
        $categories->id=$req->id;
        $categories->CategoryName=$req->CategoryName;
        $categories->Description=$req->Description;
        $categories->Image=$req->Image;
        $categories->Price=$req->Price;
        $categories->save();
        //Category::create($req->all());
        return redirect('adproduct')->with('message','Sending data successfully');
     }

     function adminlayshow(){
        $data= Category::all();
        return view('adproduct',['categories'=>$data]); 

    }

      public function index(){
            $data = Category::all();
            return view('index', ['new_categories' => $data]);
          }
          public function detail($id)
          {
            $data = Category::find($id);
              return view('detail', ['new_categories' => $data]);
          }

          // Add to Cart
    
    function addToCart(Request $req){
        if ($req->session()->has('user')) {
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->CategoryId = $req->CategoryId;
            $cart->save();
            return redirect()->route('cartitem');
        } else {
            return redirect('login');
        }
       }
       function cartitem()
    {
        $userId = Session::get('user')['id'];
        $data = DB::table('cart')
        ->join('category', 'cart.CategoryId','=','category.id')
        ->where('cart.user_id', $userId)
        ->select('category.*')
        ->get();
        return view('cartitem',['carts'=>$data]); 
    }

    // For submitting Data Contact Form
    public function contactForm(Request $req){
      $data = new Contact();
      $data ->name=$req ->name;
      $data ->email=$req ->email;
      $data ->mobile=$req ->mobile;
      $data ->address=$req ->address;
      $data ->save();
      return redirect('submit');        

    }    
}


