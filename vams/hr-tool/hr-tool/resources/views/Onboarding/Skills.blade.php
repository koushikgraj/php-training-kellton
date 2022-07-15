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
  <label for="formGroupExampleInput">Proficiency_level </label><br>
    <select name="Proficiency_level" >
          <option value="beginner">beginner</option>
          <option value="learner">learner</option>
          <option value="expert">expert</option>
          <option value="advancedexpert">advancedexpert</option>
          </select>
          <br>
  <br>
  <div>
  <label for="formGroupExampleInput">Certification</label>
    <input type="text" name ="Certification" class="form-control" id="formGroupExampleInput" placeholder="Enter Certification">
  </div>
  <br>
<div>
   <label for="formGroupExampleInput">Work_experience</label>
    <input type="" name ="Work_experience" class="form-control" id="formGroupExampleInput" placeholder="Enter Work_experience">
  </div> <br>

  <input type  = "submit" name= "btnsubmit" value="submit">
</div>
<br>
<a href='{{ url("gotoqdetail") }}' class="pull-right btn btn-success space-left">Goto Skill Data</a>
</form>
@endsection
