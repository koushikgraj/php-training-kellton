@extends('layout')
@section('content')


  <div class="category">

  <table border="5" class="table table-dark">
  <thead>
  <tr>
      <!-- <th scope="col">CategoryId</th> -->
      <th scope="col">CategoryName</th>      
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Price</th>
      <th scope="col">Add to Cart</th>
    </tr>
    @foreach($categories as $category)
    <tr>
      <!-- <td>{{$category->CategoryId}}</td> -->
      <td>{{$category->CategoryName}}</td>
      <td>{{$category->Description}}</td>
      <td><img src="{{asset('/img/' . $category->Image)}}" alt="Image" height="100px" width="120px"></td>
      <td>{{$category->Price}}</td>
      <td>{{$category->AddToCart}}</td>
    </tr>
    @endforeach
  </thead>
</table>
</div>

@endsection