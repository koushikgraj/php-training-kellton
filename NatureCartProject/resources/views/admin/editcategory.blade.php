@extends('admin/layout')

@section('container')

<form action="{{url('admin/updatecategory')}}/{{$categories->id}}" method="post" >

@csrf
<div class="card-body">
@if(session()->has('message'))
<div class="alert alert-success">
{{ session()->get('message') }}
</div>
@endif
  <div>
  <input type="hidden" name="id" value="{{$categories->id}}">
  <div>
  <label for="formGroupExampleInput">Product Name</label>
    <input type="text" value ="{{$categories->product_name}}" name ="product_name" class="form-control" id="formGroupExampleInput" placeholder="Enter Product Name">
  </div>

  <div>
   <label for="formGroupExampleInput">Product Price</label>
    <input type="text" value ="{{$categories->product_price}}" name ="product_price" class="form-control" id="formGroupExampleInput" placeholder="EnterProduct Price">
  </div>
  <div>
  <div>
   <label for="formGroupExampleInput">Product Image</label>
    <input type="file" value ="{{$categories->image}}" name ="image" class="form-control" id="formGroupExampleInput">
  </div>
  <div>
  <label for="formGroupExampleInput">Product Description</label>
    <input type="text" value ="{{$categories->product_descrip}}"name ="product_descrip" class="form-control" id="formGroupExampleInput" placeholder="Enter Product Description">
  </div>
  <br>
  
 <center> <div class="input-prepend">
   <span class="add-on"><i class="icon-user icon-white"></i></span>
  
   <button type="submit" class="btn btn-primary">Submit</button>
</div><center>
</div>
</form>
@endsection
