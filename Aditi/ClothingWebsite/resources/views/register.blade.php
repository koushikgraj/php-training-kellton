@extends('layout')
@section('content')
<div class="signIn">
    <div class="column">
        <h1>Register</h1>
    <form action="{{route('register_store')}}" method="POST">
        @csrf
        <label >Name:</label>
        <input type="text" name="name" placeholder="Your Name"><br><br>
        <span style="color: red">@error('name'){{$message}}@enderror</span><br>
        <label>Number:</label>
        <input type="text" name="number" id="" placeholder="Mobile Number"><br><br>
        <span style="color: red">@error('number'){{$message}}@enderror</span><br>

        <label>Email:</label>
        <input type="email" name="email" id="" placeholder="Your Email"><br><br>
        <span style="color: red">@error('email'){{$message}}@enderror</span><br>

        <label>Password:</label>
        <input type="password" name="password" id="" placeholder="password"><br><br>
        <span style="color: red">@error('password'){{$message}}@enderror</span><br>


        <input type="submit" name="submit" value="submit">

        <p>Have an account? <a href="login" style="color: red;">Login</a> </p>
    </form>
    </div>
    </div>
@endsection