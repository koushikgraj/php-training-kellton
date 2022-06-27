@extends('layout')

@section('content')
 <!-- sEARCH Section Starts Here -->
 <section class="food-search">
        <div class="container">
            
            <h2 class="text-center text-white">Fill this Students Details form.</h2>




            <form action="store" method="post" class="order">
               @csrf
<!-- Printing the succss msg that contact has added -->
               @if(session('message'))
               <h1><div class="alert msg" style="border: 2px solid MediumSeaGreen"
               style="color:Green;">{{session('message')}}</div></h1>
@endif
<br>
<br>

<!-- Printing the succss msg that contact has added -->

                    <legend >Students Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="name" placeholder="Enter Full Name" class="input-responsive" style="border: 2px solid tomato;" required>



                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="Enter Email" class="input-responsive" style="border: 2px solid tomato;" required>

                    <div class="order-label"  >DOB</div>
                    <input type="date" name="date" style="border: 2px solid tomato;"><br>

                    <div class="order-label" style="padding:8px">Phone Number</div>
                    <input type="tel" name="contact" placeholder="Enter Number" class="input-responsive" style="border: 2px solid tomato;" required>

                    

                    
                    <div class="order-label"style="padding:3px" >Country</div>
                    <select class="select" name="country" style="border: 2px solid tomato;">
          <option value="Select Country" >Select Your Country</option>
          <option value="INDIA">INDIA</option>
          <option value="NEPAL">NEPAL</option>
          <option value="JAPAN">JAPAN</option>
          <option value="US">US</option>
          <option value="UK">UK</option>
          </select>

          
          <div class="order-label" style="padding:10px">Address</div>
                    <textarea name="address" rows="2" placeholder="Street, City, Country" class="input-responsive" style="border: 2px solid tomato;" required></textarea>


                    <div class="order-label">Subject</div>
                    <input type="text" name="subject" placeholder="Enter Subject" class="input-responsive" style="border: 2px solid tomato;"  required>


                    <div class="order-label">Message</div>
                    <input type="textarea" name="message" placeholder="Enter Message" class="input-responsive" style="border: 2px solid tomato;" required></textarea>

                    <div class="order-label"></div>
                    <input type="submit" name="submit" value="Confirm " class="btn btn-primary">
                    
                    <input type="submit" name="submit" value="Reset" class="btn btn-primary">
                </fieldset>

            </form>

        </div>
    </section>
    <!-- student sEARCH Section Ends Here -->
@endsection
