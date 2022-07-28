@extends('layout')
@section('content')
<span class="style10"><strong>Create New Category</strong></span>
<form action="{{ url('adcategory')}}" method="post" name="form1" id="form1">
  @csrf
            <table width="100%"  border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="32" >Category Name:</td>
                <td>
                  <label>
                  <input type="text" name="CategoryName" id="txtName" />
                  </label>
                  <span class="textfieldRequiredMsg">Enter Category.</span></td>
              </tr>
              <tr>
                <td height="34">Description:</td>
                <td>
                  <label>
                  <textarea name="Description" id="txtDesc" cols="35" rows="3"></textarea>
                  </label>
                <span class="textareaRequiredMsg">Enter Description</span></td>
              </tr>
              <tr>
                <td height="34">Upload Image:</td>
                <td><label>
                  <input type="file" name="Image" id="txtFile" />
                </label></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><label>
                  <input type="submit" name="button" id="button" value="Submit" />
                </label></td>
              </tr>
</table>
        </form>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">CategoryName</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Price</th>
      <th scope="col">Edit</th>
    </tr>
    @foreach($categories as $category)
    <tr>
      <td>{{$category->id}}</td>
      <td>{{$category->CategoryName}}</td>
      <td>{{$category->Description}}</td>
      <td>{{$category->Image}}</td>
      <td>{{$category->Price}}</td>
      <td>{{$category->Edit}}</td>
      <td><a href="{{$category->CategoryId}}">Edit</a></td>
    </tr>
    @endforeach
  </thead>

  
</table>
@endsection