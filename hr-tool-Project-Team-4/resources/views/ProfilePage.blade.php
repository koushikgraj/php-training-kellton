 @extends('layout')
@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>ProfilePage</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  
}
* {
  box-sizing: border-box;
}
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #45a049;
}
/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #39515c;
  padding: 10px;
  color: white;
}
/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
  
  
}
</style>
</head>
@if (count($errors) > 0)
         <div class = "alert alert-danger">
            <ul>
               @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
               @endforeach
            </ul>
         </div>
      @endif
      
      
<body>
  

<div class="container">
  <!-- <div style="text-align:center"> -->
  <a href='{{ url("show_profile_data") }}' class="pull-right btn btn-success space-left">Goto ProfilePage Details</a>
    
  
  

    <div class="column">
      <form action="display-ProfilePage" method="post">
        @csrf
        <h2 style="color:Red;">Personal Details</h2>
        <label for="name">Name</label>
        <input type="text"  name="name" placeholder="Your name..">
        <span>@error('name'){{$message}}@enderror</span>
        <label for="contact">Contact</label>
        <input type="text"  name="contact" placeholder="Your contactnumber..">
        <span>@error('contact'){{$message}}@enderror</span>
        <label for="address">Address</label>
        <input type="text"  name="address" placeholder="Your address..">
        <span>@error('name'){{$message}}@enderror</span>
         <label for="email">Email</label><br>
        <input type="email"  name="email" placeholder="Your email.."><br><br>
        <span>@error('email'){{$message}}@enderror</span>
        <label for="birthday">Dob:</label><br>
        <input type="date"  name="dob"><br><br>
        <span>@error('dob'){{$message}}@enderror</span>
        <h3 style="color:Red;">Offical Details</h3>
        <label for="employee_id">employee_id</label><br>
        <input type="text"  name="employee_id" placeholder="Your employee_id.."><br><br>
        <span>@error('employee_id'){{$message}}@enderror</span>
        <label for="date_of_joining">date_of_joining:</label><br>
        <input type="date" name="date_of_joining"><br><br>
        <span>@error('date_of_joining'){{$message}}@enderror</span>
        <label for="Company_name">Company_name</label>
        <input type="text" name="company_name" placeholder="Your companyname..">
        <span>@error('company_name'){{$message}}@enderror</span>
        <label for="location">Location</label>
        <select  name="location" value="location">
        

        <option value="Hyderabad">Hyderabad</option>
        <option value="Gurugram">Gurugram</option>
        </select>
        <span>@error('location'){{$message}}@enderror</span>
        </select>
        <label for="employee_type">employee_type</label>
        <select  name="employee_type">
        <option value="Technical">Technical</option>
        <option value="Non-Technical">Non-Technical</option>
        </select>
        <span>@error('employee_type'){{$message}}@enderror</span>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
      </form>
    </div>
  </div>
</div>



</body>
</html> 
@endsection
 

 <!-- <form action="display-ProfilePage" method="post">
    @csrf
    Name:<input type="text" value="name" name="name">

</form> -->