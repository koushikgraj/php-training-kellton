@extends('layout')
@section('content')
<html>
<head>
<style>
body {
  background-color: blue;
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


<!--Section: Contact v.2-->
<section class="mb-4">

    <!--Section heading-->
    <h1 class="h1-responsive font-weight-bold text-center my-4">CONTACT US</h1>
    
    

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="contact" method="POST">
@csrf
                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-10">
                        <div class="md-form mb-0">
                           Name   <input type="text" id="name" name="name" class="form-control">
                           <span>@error('name'){{$message}}@enderror</span>

                            
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-10">
                        <div class="md-form mb-0">
                         Email <input type="text" id="email" name="email" class="form-control">
                         <span>@error('email'){{$message}}@enderror</span>

                            
                        </div>
                    </div>
                    <!--Grid column-->
                    <!--Grid column-->
                    <div class="col-md-10">
                        <div class="md-form mb-0">
                         DOB   <input type="date" id="date" name="date" class="form-control">
                         <span>@error('date'){{$message}}@enderror</span>
  
                        </div>
                    </div>
                    <!--Grid column-->
                    <!--Grid column-->
                    <div class="col-md-10">
                        <div class="md-form mb-0">
                         City   <input type="text" id="city" name="city" class="form-control">
                         <span>@error('city'){{$message}}@enderror</span>

                
                        </div>
                    </div>
                    <!--Grid column-->
                    <!--Grid column-->
                    <div class="col-md-10">
                        <div class="md-form mb-0">
                        State    <input type="text" id="state" name="state" class="form-control">
                        <span>@error('state'){{$message}}@enderror</span>

                    
                        </div>
                    </div>
                    <!--Grid column-->
                    <!--Grid column-->
                    <div class="col-md-10">
                        <div class="md-form mb-0">
                         Country   <input type="text" id="country" name="country" class="form-control">
                         <span>@error('country'){{$message}}@enderror</span>
 
                        </div>
                    </div>
                    <!--Grid column-->

                    

                
                <div class="row">
                    <div class="col-md-5">
                        <div class="md-form mb-7">
                          Subject  <input type="text" id="subject" name="subject" class="form-control">
                          <span>@error('subject'){{$message}}@enderror</span>
 
                        </div>
                    </div>
                </div>
                

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-100">

                        <div class="md-form">
                        Message <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                        <span>@error('message'){{$message}}@enderror</span>
   
                        </div>

                    </div>
                </div>

                </div>
               
                <!--Grid row-->

                <!--Grid row-->
            <div>
                    <button type="submit">Submit Button</button>
                    
                    <button type="reset">Reset Button</button>
                
                </div>
            </form>

<!--Grid row--><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3808.045081862915!2d78.47247581479597!3d17.36156358809415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb978a6e1a939b%3A0xcb5a69e4aaf113fb!2sCharminar!5e0!3m2!1sen!2sin!4v1656052969487!5m2!1sen!2sin" width="650" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


    </div>

</section>
</body>
</html>
<!--Section: Contact v.2-->