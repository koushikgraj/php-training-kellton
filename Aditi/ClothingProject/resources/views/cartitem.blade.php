@extends('layout')
@section('content')

<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active"> SHOPPING CART</li>
    </ul>

	<hr class="soft">
	<table class="table table-bordered">
              <thead>
                <tr>
                  <th>Product Name</th>
                  <th>Quantity</th>
                  <!-- <th>Quantity/Update</th> -->
				          <th>Price</th>
				        </tr>
              </thead>
              <tbody>
              @php $sum = 0; @endphp
              

        @foreach($carts as $cart)
        @php $sum = $sum + $cart->Price; 
        @endphp

                <tr>
                  <td>{{$cart->CategoryName}}</td>
				  <td>
					<div class="input-append"><input class="span1" style="max-width:34px" placeholder="1" id="appendedInputButtons" size="16"  type="number"><button class="btn" type="button"><i class="icon-minus"></i></button><button class="btn" type="button"><i class="icon-plus"></i></button><i class="icon-remove icon-white"></i></button>				</div>
				  </td>
                  <td>Rs{{$cart->Price}}</td>
                </tr>
				@endforeach
                <td>Total :</td>
                <td> </td>
                <td>Rs. {{$sum}}</td>
				</tbody>
            </table>
</div>
<center>
<a href="contact">
<button type="button" class="btn btn-warning">Proceed</button></a>
</center>

@endsection