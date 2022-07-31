@extends('master')
@section('content')


<section class="single_product_details_area mb-50">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="detail-img" src="{{asset('img/'.$categories->image)}}" alt="">
            </div>
            <div class="col-sm-6">
                <!-- <h4> <a href="{{url('view')}}">Go Back</a></h4> -->
                <a href="{{url('view')}}" button type="button" class="btn btn-success">
                    Go Back
                    </button></a>
                <h2>{{$categories['product_name']}}</h2>
                <h3> Price : {{$categories['product_price']}}</h3>
                <h4>Description : {{$categories['product_descrip']}}</h4>
                <br><br>
                <form action="/addtocart" method="POST">
                    @csrf
                    <input type="hidden" name="category_id" value="{{$categories['id']}}">

                    <button class="btn btn-primary">Add To Cart</button>
                </form>
                <br><br>
            </div>
        </div>
    </div>
</section>

@endsection