@extends('layout')
@section('content')
<center>

<h1>Welcome to Contact Us Page</h1>
<form action="url" method="POST">
    @csrf
    Name: <input type="text" name="username" placeholder="enter your name" style="width:40%" >
    Email: <input type="email" name="email" placeholder="enter your email id" style="width:40%" required>
    <br><br>
    D.O.B: <input type="date" name="dob" placeholder="enter your date-of-birth" style="width:80%" required >
    <br><br>
    City: <input type="text" name="city" placeholder="enter your city" style="width:80%" required>
    <br><br>
    State: <input type="text" name="state" placeholder="enter your state" style="width:80%" required>
    <br><br>
    <div class="order-label"style="padding:3px" >Country</div>
                    <select class="select" name="country" style="border: 2px solid tomato;">
          <option value="Select Country" >Select Your Country</option>
          <option value="INDIA">INDIA</option>
          <option value="NEPAL">NEPAL</option>
          <option value="JAPAN">JAPAN</option>
          <option value="US">US</option>
          <option value="UK">UK</option>
          </select>
    <br><br>
    Subject: <textarea type="text" name ="subject" placeholder="enter subject" style="width:80%" required></textarea>
    <br><br>
    <button> Reset Button</button>
    <button type="submit">  Submit Button</button>
</form>
</center>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224346.48129412968!2d77.06889969035102!3d28.52728034389636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x52c2b7494e204dce!2sNew%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1655982824732!5m2!1sen!2sin" width="300" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


@stop