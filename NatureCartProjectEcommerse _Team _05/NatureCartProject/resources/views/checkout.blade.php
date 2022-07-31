@extends('master')
@section('content')


<form action="{{url('checkout')}}" method="POST">
  @csrf


  <div class="form-row">
    <div class="form-group col-md-6">

      <label for="fullname">Full Name</label>
      <input name="fullname" type="text" class="form-control" id="fullname" placeholder="Enter Full Name" required>
    </div>
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input name="email" type="email" class="form-control" id="email" placeholder="Enter Your  Email" required>
    </div>
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input name="address" type="text" class="form-control" id="address" placeholder="Enter Your Address" required>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="city">City</label>
      <input name="city" type="text" class="form-control" id="city" placeholder="Enter Your City" required>
    </div>
    <div class="form-group col-md-4">
      <label for="State">State</label>
      <select name="state" id="State" class="form-control">
        <option selected>Choose</option>
        <option>Madhya Pradesh</option>
        <option>Uttar Pradesh</option>
        <option>MH</option>
        <option>Delhi</option>
        <option>Haryana</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="paymentmethod">Payment Method </label>
      <select name="payment_method" id="paymentmethod" class="form-control" required>
        <option selected>Choose</option>
        <option>COD</option>

      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="Zip">Zip</label>
      <input name="zip" type="text" class="form-control" id="zip" required>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <center><a href="thankyou"><button class="btn btn-primary">Place Order</button> </a></center>
</form>

@endsection