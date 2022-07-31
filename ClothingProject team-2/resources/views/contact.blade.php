@extends('layout')
@section('content')


    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <span class="breadcrumb-item active">Contact</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Contact Start -->
    <div class="signInContainer">
    <div class="column">
        <h2>Check On Delivery Products</h2>
      <form action="submit" method=post>
        @csrf
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Your name.."><br><br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Your email.."><br><br>

        <label for="mobile">Mobile:</label>
        <input type="text" id="mobile" name="mobile" placeholder="Your mobile.."><br><br>

        <label for="address">Address</label>
        <input type="text" id="address" name="address" placeholder="Your address.."><br><br>
        
        <input type="submit" value="Submit">
      </form>
    </div>
</div>
    <!-- Contact End -->

@endsection