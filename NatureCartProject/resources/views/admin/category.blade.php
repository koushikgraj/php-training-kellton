@extends('admin/layout')

@section('container')
    <h1 class="mb10">Category</h1>
    <a href="manage_category">
        <button type="button" class="btn btn-success">
            Add Category
        </button>
    </a>
    <div class="row m-t-30">
        <div class="col-md-12">
            <!-- DATA TABLE-->

       

<h3>List of Product</h3>

    <table class ="table" >

    <thead class="table-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Produt Name</th>
      <th scope="col">Product Price</th>
      <th scope="col">Product Image</th>
      <th scope="col">Product Description</th>
      <th width="col">Action</th>
    </tr>

<?php
$i=0;
?>  
    @foreach($categories as $item)
    <tr>
      <td>{{$item->id}}</td>
      <td>{{$item->product_name}}</td>
      <td>{{$item->product_price}}</td>
      <td><img src="{{asset('img/'.$item->image)}}" alt="image" class="img-fluid p-5" height="70%" width="120%"></td>
      <td>{{$item->product_descrip}}</td>

      <td>
  <!-- Edit -->
  <a href='{{ url("admin/editcategory/$item->id") }}' class="btn btn-sm btn-info">Edit</a>
  <!-- Delete -->
  <a href='{{ url("admin/deletecategory/$item->id") }}' class="btn btn-sm btn-danger">Delete</a>
  </td>
    </tr>
    @endforeach
  </thead>

  
</table>



        </div>
    </div>
                        
@endsection