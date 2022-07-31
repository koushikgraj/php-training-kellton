@extends('master')
@section('content')


<!-- All Products Area -->
<div class="col-12 col-md-8 col-lg-9">
    <div class="shop-products-area">
        <div class="row">

            <!-- Single Product Area -->
            @foreach($categories as $item)
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-product-area mb-50">

                    <!-- Product Image -->

                    <div class="product-img-div">
                        <a href="detail/{{$item['id']}} "><img src="{{asset('img/'.$item->image)}}" alt=""></a>
                        <!-- Product Tag -->
                        <div class="product-tag">
                            <a href="#">Hot</a>
                        </div>
                        <div class="product-meta d-flex">

                            <a href="#" class="wishlist-btn"><i class="icon_heart_alt"></i></a>
                            <a href="detail/{{$item['id']}}" class="add-to-cart-btn">View Details</a>
                            <a href="#" class="compare-btn"><i class="arrow_left-right_alt"></i></a>
                        </div>
                    </div>
                    <!-- Product Info -->
                    <div class="product-info mt-15 text-center">
                        <a href="detail/{{$item['id']}}">
                            <p>{{$item['product_name']}}</p>
                        </a>
                        <h6>{{$item['product_price']}}</h6>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>


    </div>
</div>
</div>
</div>
</section>
<!-- ##### Shop Area End ##### -->

@endsection