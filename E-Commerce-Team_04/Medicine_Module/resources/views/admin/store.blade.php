@extends('admin/layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<body>

  <div class="site-wrap">


    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="home">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Store</strong></div>
        </div>
      </div>
    </div>
    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
      
          @foreach($data as $d)

          <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
            <span class="onsale">Sale</span>
            <a href="#"><img src="{{asset('images/'.$d->image)}}" alt="image" class="img-fluid p-5" height="60%" width="60%"></a>
            <h3 class="text-dark"><a href="si  ngle-product9">{{$d->product}}</a></h3>
            <p class="price">₹ &nbsp;{{$d->price}}</p>

            <form action="{{url('admin/addtocart')}}" method="post">
            @csrf
            <input type="hidden" name="product_id" value="{{$d['id']}}">

            <input type="number" value="1" min="1" class="form-control" style="width:100px;" name="quantity">
            <br>
            <input class = "btn btn-primary" type ="submit" value="ADD TO CART"></input>
            </form>
          </div>
          @endforeach

          
        </div>
        
      </div>
    </div>
    
</body>

</html>
@endsection