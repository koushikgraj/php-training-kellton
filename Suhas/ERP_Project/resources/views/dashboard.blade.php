@extends('layout')
@section('content')

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>

<div class="row">
  <div class="column" style="background-color:black; border: 5px solid grey;">
 <justify><a href="layout"> <h2 class="text-primary"><i class="fa fa-user-edit me-2"></i>Home</h2></a></justify>
  
    <p></p>
  </div>
  <div class="column" style="background-color:black; border: 5px solid grey; ">
 <a href="get"> <h2 class="text-primary"><i class="fa fa-user-edit me-2"></i>Profile</h2></a>
    <p></p>
  </div>
  <div class="column" style="background-color:black; border: 5px solid grey; ">
 <a href="add"> <h2 class="text-primary"><i class="fa fa-user-edit me-2"></i>Add User</h2></a>
    <p></p>
  </div>
  <div class="column" style="background-color:black; border: 5px solid grey; ">
 <a href="add"> <h2 class="text-primary"><i class="fa fa-user-edit me-2"></i>Update User Profile</h2></a>
    <p></p>
  </div>
</div>

</body>
</html>
@endsection