@extends('index')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Contact Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-image: url("contact.jpg");
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
  <div style="text-align:center">
    <h2>Contact Us</h2>
  
  </div>
  <div class="row">
    <div class="column">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113274.76002287847!2d77.61411432115723!3d27.474356827124762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397371163d4d5205%3A0x4273a09defe10ea5!2sMathura%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1655979486622!5m2!1sen!2sin" 
        width="600" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="column">
      <form action="contact" method=post>
        @csrf
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Your name..">
        <span>@error('name'){{$message}}@enderror</span>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Your email.."><br><br>
        <span>@error('email'){{$message}}@enderror</span>

        <label for="birthday">DOB:</label>
        <input type="date" id="birthday" name="dob"><br><br>
        <span>@error('dob'){{$message}}@enderror</span>

        <label for="city">City</label>
        <input type="text" id="city" name="city" placeholder="Your city.."><br><br>
        <span>@error('city'){{$message}}@enderror</span>

        <label for="state">State</label>
        <select id="state" name="state">
          <option value="Uttar Pradesh">Uttar Pradesh</option>
          <option value="Madhya Pradesh">Canada</option>
          <option value="Gujarat">Gujarat</option>
          <option value="Assam">Assam</option>
        </select>
        <span>@error('state'){{$message}}@enderror</span>

        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
          <option value="India">India</option>
        </select>
        <span>@error('country'){{$message}}@enderror</span>

        <label for="subject">Subject</label>
        <input type="text" id="subject" name="subject" placeholder="subject..">
        <span>@error('subject'){{$message}}@enderror</span>

        <label for="message">Message</label>
        <textarea id="message" name="message" placeholder="Write something.." style="height:120px"></textarea>
        <span>@error('message'){{$message}}@enderror</span>

        <input type="submit" value="Submit">
        <input type="submit" value="Reset">
      </form>
    </div>
  </div>
</div>


</body>
</html>
