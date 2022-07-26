<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
class CategoryController extends Controller
{
    
      /**
     * Display a page for storing data.
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
           $data = Category::paginate(6);;
           return view('admin.categorylist', ['data'=>$data]);

       } else {
        $request->Session()->flash('message','Data is not Available.');
        return redirect('admin/addcategory');

       }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $list
     * @return \Illuminate\Http\Response
     */
    public function storeList()
    {
       if(Session::exists('user_login')) {
           $list = Category::paginate(6);
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
       $result = Category::find($id);
       return view('admin.modifycategory')->with('result', $result);

     }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $data
     * @return \Illuminate\Http\Response
     */
    public function modifyCategory(Request $request, $id)
    {
        $data= $request->except('-method','_token','submit');
        $arr['product']=$data['product'];
        $arr['description']=$data['description'];
        $arr['price']=$data['price'];
        $arr['image']=$data['image'];
        $result = Category::where('id','=',$data['id'])->update($arr);
        $request->Session()->flash('message','Product Updated Successfully.');
        return redirect('admin/category/list');

    }
}








