@extends('admin/layout')
@section('content')

<div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
            <div class="alert alert-success col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4" role="alert">
           {{session('message')}}
          </div>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Product</th>
                    <th class="product-price">Price</th>
                    <th class="product-quantity">Quantity</th>
                    <th class="product-remove">Remove</th>
                  </tr>
                </thead>

                @foreach($data as $d)
                <tbody>
                  <tr>
                    <td class="product-thumbnail">
                    <img img src="{{asset('images/'.$d->image)}}" alt="image" class="img-fluid">                   
                     <td class="product-name">
                     <h2 class="h5 text-black">{{$d->product}}</h2>
                    </td>
                    <td>
                      {{$d->price}}
                    </td>
                    <td>
                      {{$d->quantity}}
                    </td>
                    <td>
                      <a href="/admin/cart/removeproduct/{{$d->id}}" class="btn btn-primary height-auto btn-sm">X</a>
                    </td>
                  </tr>
                </tbody>
                @endforeach

              </table>
            </div>
          </form>
        </div>
    
        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6">
                <a href="store"><button class="btn btn-outline-primary btn-md btn-block">Continue Shopping</button></a>
              </div>
              <div class="col-md-6">
                <a href="checkout"><button class="btn btn-primary btn-md btn-block">Proceed To Checkout</button></a>
              </div>
            </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
@endsection