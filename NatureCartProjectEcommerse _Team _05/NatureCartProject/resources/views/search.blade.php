@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>
    <div class="col-sm-4">
        <div class="trending-wrapper">
            <h4>Result for Products</h4>
            @foreach($categories as $item)
            <div class="searched-item">
                <a href="detail/{{$item['id']}}">
                    <img class="trending-image" src="{{asset('img/'.$item->image)}}">
                    <div class="">
                        <h2>{{$item['product_name']}}</h2>
                        <h5>{{$item['product_price']}}</h5>
                        <h5>{{$item['product_descrip']}}</h5>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection