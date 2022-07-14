@extends('layout')
@section('content')

<!DOCTYPE html>
<html>
  <head>
    <title>Educational registration form</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    </head>
  <body>

  </div>
      <!-- <form action="{{ url('storebank-details')}}" method="post"> -->
      <form action="{{ url('bank-details') }}" method="post">
        @csrf

<!-- Printing the succss msg that contact has added -->
@if(session('message'))
 <h1><div class="alert msg" style="text-align:center;"
 style="color:Green;">{{session('message')}}</div></h1>
@endif
<br>
<br>

<!-- Printing the succss msg end here -->




<!--Remove temp_container-->
<div class="temp_container">
  
<div class="bank--control">
  
  <div class="bank--add__head">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <h2><span class="control-label">Add Bank Account</span></h2>
        </div>
    </div>
  </div>
  </div>
  <br>

  <a href='{{ url("showbankdata") }}' class="pull-right btn btn-success space-left">Goto Bank Details</a>
  <br>
  <br>

  <div class="bank--add__body">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <div class="form__control">
            <label class="form__label">Account type</label>
            <br>
            <select name="account_type"  class="bank__country" required>
              <option>Select an account type</option>
              <option>Current Account</option>
              <option>Regular</option>
              <option>Salary Account</option>
              <option>Savings</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <div class="form__control">
            <label class="form__label">Country</label>
            <br>
            <select name="country" class="bank__country" required>
              <option>Select Country of Bank</option>
              <option>India</option>
              <option>Nepal</option>
              <option>USA</option>
              <option>Japan</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <div class="form__control">
            <label class="form__label" for="iban">IFSC Code</label>
            <br>
            <input type="text" name="ifsc_code" id="iban" placeholder="e.g. 019873" required>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-md-8">
          <div class="form__control">
            <label class="form__label" for="routing">Branch Contact</label>
            <br>
            <input type="text" name="contact" id="routing" placeholder="e.g. 9948497807" required>
          </div>
        </div>

        <div class="col-xs-12 col-md-8">
          <div class="form__control">
            <label class="form__label" for="routing">Bank Name</label>
            <br>
            <input type="text"  name="name" id="routing" placeholder="e.g. State Bank of India" required>
          </div>
        </div>


       
      </div>
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <div class="form__control">
            <label class="form__label" for="branchID">Branch Location</label>
            <br>
            <input type="text" name="location" id="branchID" placeholder="e.g. Hyderabad" required>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-md-8">
          <div class="form__control">
            <label class="form__label" for="account-number">Account number</label>
            <br>
            <input class="account-number" name="account_number"  type="password" placeholder="e.g. 000122039827" required>
            <span class="show__account--number">
              <!-- this code is showing eye symbol for to see data while typing or not to see -->
              <!-- <i class="fa fa-eye-slash pword_icon"></i> -->
            </span>
          </div>
        </div>
        
      </div>
      <br>
      <div class="row">
        <div class="col-md-12">
          <button type="submit" class="pull-right btn btn-success space-left">Add account</button>
          <button type="reset" value="Reset" class="pull-right btn btn-success space-left">Reset</button>
        </div>
      </div>
    </div>
  </div>
</div>  
</div>
<!--Remove temp_container-->
</form>
    </div>
  </body>
</html>
@endsection
