@extends('layout')
@section('content')
<div>
    <h1>User Registration Form</h1>
    <div class="col-sm-4">
<form action="register" method="post">
@csrf
<div class="form-group">
    <label for="exampleInputname">Username</label>
    <input type="name" name="name"class="form-control" id="exampleInputname" aria-describedby="nameHelp" placeholder="Enter name">
    <small id="nameHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputmobile">Mobile</label>
    <input type="mobile" name="password"class="form-control" id="exampleInputmobile" placeholder="Contact">
  </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
  
</form>

</div>

  </div>