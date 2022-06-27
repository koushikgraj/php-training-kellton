@extends('layout')
@section('content')
<center>

<h1>Welcome to Contact Us Page</h1>
  <div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Swing by for a cup of coffee, or leave us a message:</p>
  </div>
  <div class="row">
    <div class="column">
    </div>
    <div class="column">
    <form action="url" method="post">
      @csrf
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Your name.." required><br><br>
        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="enter your email" required><br><br>
        <label for="dob">Dob</label>
        <input type="date" id="dob" name="dob" ><br><br>
        <label for="city">City</label>
        <input type="text" name="city" placeholder="enter your cityname" required><br><br>
        <label for="state">State</label>
        <select id="state" name="state" required>
          <option value="karnataka">Karnataka</option>
          <option value="telangana">Telangana</option>
          <option value="haryana">Haryana</option>
          <option value="andhra pradesh">Andhra Pradesh</option>
        </select><br><br>
        <label for="country">Country</label>
        <select id="country" name="country" required>
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="india">India</option>
        </select><br><br>
        <label for="subject" required>Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:50px"></textarea><br><br>
        <label for="message" required>Message</label>
        <textarea id="message" name="message" placeholder="Write something.." style="height:50px"></textarea><br><br>
        <input type="submit" value="Submit">
        <input type="reset" value="reset"><br><br>
        <img src="images/mangalagiri.jpg" style="width:100%">
      </form>
</center>
    </div>
  </div>
</div>