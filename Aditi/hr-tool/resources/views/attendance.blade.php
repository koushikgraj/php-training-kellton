@extends('layout')
@section('content')
<form action ="{{url('store-attendance')}}" method="POST">
@csrf

<div class="head">
        <h1>Attendance</h1>
        <h2>Dashboard/Attendance</h2>
    </div>

    <table class ="table" id=" ">
    <tbody id="myrow">
  <div class="form-group" >
    <label for="formGroupExampleInput">First Name</label>
    <input type="text" name ="first_name" class="form-control" id="formGroupExampleInput" placeholder="Enter fisrt name" required>
  </div>
  <br>
  <div>
  <label for="formGroupExampleInput">Last Name </label>
    <input type="text" name ="last_name" class="form-control" id="formGroupExampleInput" placeholder="Enter last name"required>
  </div>
  <br>
  <div>
  <label for="formGroupExampleInput">Employee Id</label>
    <input type="text" name ="emp_id" class="form-control" id="formGroupExampleInput" placeholder="Enter employee id"required>
  </div>
    <div>
  <label for="formGroupExampleInput">Status :</label>

  <select name="status" id="" >
  <option selected>Select</option>
              <option >P</option>
              <option >A</option>
</select>
  </select>
  <input type  = "submit" name= "btnsubmit" value="submit">

</div>
</tbody>
</table>


  



</form>

@endsection