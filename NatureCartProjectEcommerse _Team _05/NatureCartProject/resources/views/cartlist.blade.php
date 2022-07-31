@extends('master')
@section('content')
<div class="span9">
  <hr class="soft" />
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Product Name</th>
        <th>Product Quantity</th>
        <th>Product Price</th>
        <th>Remove CartList</th>

      </tr>
    </thead>
    <tbody>
      @php $sum = 0; @endphp
      @foreach($carts as $cart)
      @php $sum = $sum + $cart->product_price; @endphp

      <td>{{$cart->product_name}}</td>
      <td>
        <input type="number" value="1" min="1" class="btn" style="width:100px;">
      </td>
      <td>Rs{{$cart->product_price}}</td>
      </td>
      <td>
        <a href="removeproduct/{{$cart->id}}"> <button class="btn btn-warning">Remove from Cart</button></a>
      </td>
      </tr>
</div>
@endforeach
<tr>
  <td colspan="2" style="text-align:right">Total Price: </td>
  <td>Rs{{$sum}}</td>
</tr>
</tbody>
</table>
<center><a href="checkout"> <button class="btn btn-primary">Checkout</button></a></center>
</div>

@endsection