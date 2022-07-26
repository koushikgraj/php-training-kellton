@extends('layout')
@section('content')

<h1>Welcome to login page</h1>


<form action="/api/auth/login" method="POST">
        @csrf
     

        <label>Email:</label>
        <input type="email" name="email" id="" placeholder="Your Email"><br><br>
        <span style="color: red">@error('email'){{$message}}@enderror</span><br>

        <label>Password:</label>
        <input type="password" name="password" id="" placeholder="password"><br><br>
        <span style="color: red">@error('password'){{$message}}@enderror</span><br>

        <input type="submit" name="submit" value="Login">
    </form>

@endsection