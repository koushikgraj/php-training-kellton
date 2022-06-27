<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student Website</title>

    <!-- Link our CSS file -->
    
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
</head>
@extends('layout')

@section('content')
 <!-- student sEARCH Section Starts Here -->
 <section class="student-search text-center">
        <div class="container">
            
            <form action="contact" method="post">
                <input type="search" name="search" placeholder="Search for student.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- student sEARCH Section Ends Here -->

    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore student</h2>

            <a href="myprofile">
            <div class="box-3 float-container">
            <img src="{{ url('images/dk.jpeg') }}" alt="dk" width=200 class="img-responsive img-curve">

                <h3 class="float-text text-white">CSE</h3>
            </div>
            </a>

            <a href="home">
            <div class="box-3 float-container">
            <img src="{{ url('images/dk.jpeg') }}" alt="dk" width=200 class="img-responsive img-curve">

                <h3 class="float-text text-white">CIVIL</h3>
            </div>
            </a>

            <a href="home">
            <div class="box-3 float-container">
            <img src="{{ url('images/dk.jpeg') }}" alt="dk" width=200  class="img-responsive img-curve">

                <h3 class="float-text text-white">IT</h3>
            </div>
            </a>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->
@endsection
