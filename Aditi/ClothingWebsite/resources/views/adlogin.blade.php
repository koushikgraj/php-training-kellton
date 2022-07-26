@extends('layout')
@section('content')

<h1>Admin Dashboard</h1>

    <form action="{{url('/adlogin')}}" method="post">

        @csrf
     

        <label>Name:</label>
        <input type="text" name="name" id="" placeholder="Your name"><br><br>
        <span style="color: red">@error('name'){{$message}}@enderror</span><br>

        <label>Password:</label>
        <input type="password" name="password" id="" placeholder="password"><br><br>
        <span style="color: red">@error('password'){{$message}}@enderror</span><br>

        <input type="submit" name="submit" value="Login">
    </form>
 
@endsection