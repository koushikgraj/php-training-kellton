@extends('admin/layout')
@section('content')

<div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Product</th>
                    <th class="product-price">Price</th>
                    <th class="product-quantity">Quantity</th>
                  </tr>
                </thead>

                @foreach($order as $d)
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
                  </tr>
                </tbody>
                @endforeach

              </table>
            </div>
          </form>
        </div>
    
      </div>
    </div>
@endsection