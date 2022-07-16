@extends('layout')
@section('content')

<form action ="{{ url('Qdata') }}" method="POST">
@csrf
<div class="Qualification">
  <div class="form-group">
    <label for="formGroupExampleInput">Course</label>
    <input type="text" name ="Course" class="form-control" id="formGroupExampleInput" placeholder="Enter Course">
  </div>
  <br>
  <div>
  <label for="formGroupExampleInput">University </label>
    <input type="text" name ="University" class="form-control" id="formGroupExampleInput" placeholder="Enter University">
  </div>
  <br>
  <div>
  <label for="formGroupExampleInput">Academic_year</label>
    <input type="text" name ="Academic_year" class="form-control" id="formGroupExampleInput" placeholder="Enter Academic_year">
  </div>
<div>
   <label for="formGroupExampleInput">Year_of_passing</label>
    <input type="text" name ="Year_of_passing" class="form-control" id="formGroupExampleInput" placeholder="Enter Year_of_passing">
  </div>
  <div>
   <label for="formGroupExampleInput">Percentage</label>
    <input type="text" name ="Percentage" class="form-control" id="formGroupExampleInput" placeholder="Enter Percentage">
  </div>
  
  <br>

  <input type  = "submit" name= "btnsubmit" value="submit"><br>
</div>
<a href='{{ url("gotoqdetail") }}' class="pull-right btn btn-success space-left">Goto Qualification Details</a>
</form>

@endsection 