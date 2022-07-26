@extends('layout')
@section('content')



<section class="single_product_details_area mb-50">
<div class="container">
<div class="row">
    <div class="col-sm-6">
    <img class="detail-img" src="{{asset('/img/' . $new_categories->Image)}}" alt="">
    </div>
    <div class="col-sm-6">
   <h4> <a href="view">Go Back</a></h4>
    <h2>{{$new_categories['CategoryName']}}</h2>
    <h3> Price : {{$new_categories['Price']}}</h3>
    <h4>Description :  {{$new_categories['Description']}}</h4>
    <br><br>
    <form action="{{route('addToCart')}}" method="POST">
    @csrf
    <input type="hidden" name="category_id" value="{{$new_categories['id']}}">
    <button type="submit" class="btn btn-primary">Add To Cart</button>
    </form>
    <br><br>
</div>
</div>
</div>
</section>


@endsection