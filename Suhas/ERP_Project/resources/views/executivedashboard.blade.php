@extends('layout')
@section('content')
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 80px;
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
  <div class="column" style="background-color: black; border: 5px solid grey;">
  <h2 class="text-primary"><i class="fa fa-user-edit me-2"></i>Messages</h2>
    <p>Mesages found(0)</p>
  </div>
  <div class="column" style="background-color:black; border: 5px solid grey;">
  <h2 class="text-primary"><i class="fa fa-user-edit me-2"></i>Notifications</h2>
    <p>No Notifications found</p>
  </div>
</div>

<div class="row">
  <div class="column" style="background-color:black; border: 5px solid grey;">
  <h2 class="text-primary"><i class="fa fa-user-edit me-2"></i>Reminders</h2>
    <p>Reminders(0)</p>
  </div>
  <div class="column" style="background-color:black; border: 5px solid grey;">
  <h2 class="text-primary"><i class="fa fa-user-edit me-2"></i>Reports</h2>
    <p>No recent reports found </p>
  </div>
</div>

<script>
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;

// List View
function listView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "100%";
  }
}

// Grid View
function gridView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "50%";
  }
}

/* Optional: Add active class to the current button (highlight it) */
var container = document.getElementById("btnContainer");
var btns = container.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

</body>
</html>


@endsection