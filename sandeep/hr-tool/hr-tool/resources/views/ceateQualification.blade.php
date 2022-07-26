@extends('layout')
@section('content')

<form action ="display-Qualification" method="POST">
@csrf
<div class="choliday">
  <div class="form-group">
    <label for="formGroupExampleInput">No</label>
    <input type="text" name ="no" class="form-control" id="formGroupExampleInput" placeholder="Enter Number">
  </div>
  <br>
  <div>
  <label for="formGroupExampleInput">cource </label>
    <input type="text" name ="cource" class="form-control" id="formGroupExampleInput" placeholder="Enter cource">
  </div>
  <br>
  <div>
  <label for="formGroupExampleInput">university</label>
    <input type="text" name ="university" class="form-control" id="formGroupExampleInput" placeholder="Enter university">
  </div>
<div>
   <label for="formGroupExampleInput">academic_year</label>
    <input type="year" name ="academic_year" class="form-control" id="formGroupExampleInput" placeholder="Enter academic_year">
  </div>
  <div>
   <label for="formGroupExampleInput">year_of_passing</label>
    <input type="year" name ="year_of_passing" class="form-control" id="formGroupExampleInput" placeholder="Enter year_of_passing">
  </div>
  <div>
  <label for="formGroupExampleInput">percentage</label>
    <input type="text" name ="percentage" class="form-control" id="formGroupExampleInput" placeholder="Enter percentage">
  </div>
  <br>
  
  <input type  = "submit" name= "btnsubmit" value="submit">
</div>
</form>

@endsection