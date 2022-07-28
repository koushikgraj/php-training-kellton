@extends('layout')
@section('content')
    <form action="/web/register" method="POST">
        @csrf
        <label >Name:</label>
        <input type="text" name="name" placeholder="Your Name"><br><br>
        <span style="color: red">@error('name'){{$message}}@enderror</span><br>
        <label>Password:</label>
        <input type="password" name="password" id="" placeholder="password"><br><br>
        <span style="color: red">@error('password'){{$message}}@enderror</span><br>
        <input type="submit" name="submit" value="submit">
    </form>

    @endsection