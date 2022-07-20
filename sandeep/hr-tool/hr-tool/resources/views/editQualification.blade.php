<form action="{{route('update',[$holiday->id])}}" method="post" >
<!-- <form action ="store" method="POST"> -->
@csrf
@method('put')

<div class="cQualification">

  <div>
  <label for="formGroupExampleInput">cource</label>
    <input type="text" value ="{{$Qualification->cource}}" name ="cource" class="form-control" id="formGroupExampleInput" placeholder="Enter cource">
  </div>
  <br>
  <div>
  <label for="formGroupExampleInput">university</label>
    <input type="text" value ="{{$Qualification->university}}" name ="university" class="form-control" id="formGroupExampleInput" placeholder="Enter university">
  </div>
<div>
   <label for="formGroupExampleInput">academic_year</label>
    <input type="year" value ="{{$Qualification->academic_year}}" name ="academic_year" class="form-control" id="formGroupExampleInput" placeholder="Enter academic_year">
  </div>
  <div>
   <label for="formGroupExampleInput">year_of_passing</label>
    <input type="year" value ="{{$Qualification->year_of_passing}}" name ="year_of_passing" class="form-control" id="formGroupExampleInput" placeholder="Enter year_of_passing">
  </div>
  <div>
  <label for="formGroupExampleInput">percentage</label>
    <input type="text" value ="{{$Qualification->percentage}}"name ="percentage" class="form-control" id="formGroupExampleInput" placeholder="Enter percentage">
  </div>
  <br>
  
  <input type  = "submit" name= "btnsubmit" value="submit">
</div>
</form>