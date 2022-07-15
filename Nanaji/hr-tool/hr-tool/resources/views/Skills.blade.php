@extends('layout')
@section('content')

<form action ="{{ url('Skilldata') }}" method="POST">
@csrf
<div class="Qualification">
  <div class="form-group">
    <label for="formGroupExampleInput">Programming_language</label>
    <input type="text" name ="Programming_language" class="form-control" id="formGroupExampleInput" placeholder="Enter Programming_language">
  </div>
  <br>
  <div>
  <label for="formGroupExampleInput">Proficiency_level </label>
    <input type="text" name ="Proficiency_level" class="form-control" id="formGroupExampleInput" placeholder="Enter Proficiency_level">
  </div>
  <br>
  <div>
  <label for="formGroupExampleInput">Cerfificate</label>
    <input type="year" name ="Cerfificate" class="form-control" id="formGroupExampleInput" placeholder="Enter Cerfificate">
  </div>
<div>
   <label for="formGroupExampleInput">Work_experience</label>
    <input type="" name ="Work_experience" class="form-control" id="formGroupExampleInput" placeholder="Enter Work_experience">
  </div>
  
  <br>

  <input type  = "submit" name= "btnsubmit" value="submit">
</div>
</form>

@endsection 