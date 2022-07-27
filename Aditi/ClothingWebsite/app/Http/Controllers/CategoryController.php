<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Session;
// use Illuminate\Support\Facades\Category;
use Hash;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Cart;
use App\Models\User;
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
        return view('adcategory',['categories'=>$data]); 

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

    public function edit(Category $category)
    {
        return view('adproduct',compact('category'));
    }

    public function update(Request $req, Category $category)
    {    
        $category->update($req->all());

        return redirect('edit') ->with('success','Data updated successfully');
    }

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
    public function logout(Request $request) {
        Session::forget('user_login');
        Session::forget('user_id');
        // return redirect('admin');
        return redirect('index');
      }

      public function index(){
        // $categories = Category::get();
        // $new_categories = Category::limit(20)->latest()->get();
        // return view('index',compact('new_categories'));
            $data = Category::all();
            return view('index', ['new_categories' => $data]);
          }
          public function detail($id)
          {
            $data = Category::find($id);
              return view('detail', ['new_categories' => $data]);
          }
    

//     public function detail($CategoryId)
//     {
//         // Category::where( $new_categories);
//    // return Category::where($CategoryId);
//     $data =Category::find($CategoryId);
//     return view('detail',['category'=>$data]);
//         // return "Hello";
//     }

    function addToCart(){
        if(Auth::user()){
            return "Hello";
        }
        // {
        //     $cart= new Cart;
        //     $cart->users_id=$req->session()->get('user')['id'];
        //     $cart->CategoryId=$req->CategoryId;
        //     $cart->save();
        // }
        else{
            return redirect('login');
        }
        //return "Hello";
    }

    function cartItem(){
        $CategoryId=Session::get('user')['id'];
        return Cart::where('user_id',$CategoryId)->count();
    }

    public function store(Request $request)
    {
        $data = array(
            // 'user_id'=>Auth::user()->id,
            'CategoryName'=>$request->CategoryName,
            'Price'=>$request->Price,

        );
        Category::create($data);
        return redirect()->route('cart');
    }

    // function cart(Request $request,$CategoryId){
    //     // $CategoryId = $request->CategoryId;
    //      $CategoryId= Category::find($CategoryId);

    //     dd($CategoryId);
        // return "Hello";
    // }

    function register(){
        return view ('register');
    }

    function register_store(Request $request){

            $data = array(
                'name' => $request->name,
                'email' => $request->email,
                'number' => $request->number,
                'password' => Hash::make($request->password),
                'role' => 'user'
            );
            $user = User::create($data);
            return redirect('login');
        }

        public function loginCheck(Request $request){
            $data = array(
             'email' => $request->email,
             'password' => $request->password
            );
            if(Auth::attempt($data)){
             return redirect()->route('index');
            }else{
             return back()->withErrors(['message'=>'invalid email or password']);
            }
            }
    }


