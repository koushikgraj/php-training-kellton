@extends('layout')
@section('content')


<div class="card">
  <h3><div class="card-header" style="color:Green;">Add Bank Account</div></h3>
  <div class="card-body">

  <!-- Printing the succss msg that contact has added -->
@if(session('success'))
 <div class="alert alert-success"  style="width:250px;" style="color:Red;" style="text-align:left;" style="padding:3px;">
 {{session('success')}}
</div>
@endif
<!-- Printing the succss msg end here -->


<a href='{{ url("showbankdata") }}' class="pull-right btn btn-success space-left">All Bank Data</a>

     
      <form action="{{ url('bank-details') }}" method="post">
        {!! csrf_field() !!}
       
       
        <label>Account type</label></br>
        <select name="account_type"  class="form-control" required></br>
              <option>Select an account type</option>
              <option>Current Account</option>
              <option>Regular</option>
              <option>Salary Account</option>
              <option>Savings</option>
            </select>
        <label>Country</label></br>
        <select name="country" class="form-control" required></br>
              <option>Select Country of Bank</option>
              <option>India</option>
              <option>Nepal</option>
              <option>USA</option>
              <option>Japan</option>
            </select>
        <label>IFSC Code</label></br>
        <input type="text" name="ifsc_code" id="mobile" class="form-control" placeholder="e.g. 019873" required></br>

        <label>Branch Contact</label></br>
        <input type="text" name="contact" id="address"  class="form-control" placeholder="e.g. 9948497807" required></br>

        <label>Bank Name</label></br>
        <input type="text" name="name" id="mobile"  class="form-control" placeholder="e.g. State Bank of India" required></br>

        <label>Branch Location</label></br>
        <input type="text" name="location" id="address"  class="form-control" placeholder="e.g. Hyderabad" required></br>

        <label>Account number</label></br>
        <input type="password" name="account_number" id="mobile" class="form-control" placeholder="e.g. 000122039827" required></br>

        
        <button type="submit" class="btn btn-success">Add account</button>
          <button type="reset" value="Reset" class="btn btn-success">Reset</button>
        
    </form>
  
  </div>
</div>
@stop