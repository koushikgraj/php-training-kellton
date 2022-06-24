
@extends('layout')
@section('content')
<html><head>
    <style>
        /* .maincontainer{
            border:2px solid black;

        } */
        .container1{
            /* border:2px solid black; */
            background-color: antiquewhite;

        }
        
        .container3{
            /* border:2px solid black; */
            padding-left:300px;
        }
    </style>
</head>
<body>
    <div class="maincontainer">
    
<div class="container">
<div class="container1">
<section class="mb-4 ">


    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>
       
    <div class="row">

        <!--Grid column-->
        <div class="col-md-12 mb-md-0 mb-2">
            
            <form id="contact-form" name="contact-form" action="contects" method="POST">
@csrf

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">Your name</label>
                            <span>@error('name'){{$message}}@enderror</span>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Your email</label>
                            <span>@error('email'){{$message}}@enderror</span>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="date" id="date" name="dob" class="form-control">
                            <label for="date" class="">Date Of Birth</label>
                            <span>@error('date'){{$message}}@enderror</span>
                        </div>
                    </div>
                </div>
                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="city" name="city" class="form-control">
                            <label for="city" class="">City</label>
                            <span>@error('city'){{$message}}@enderror</span>
                        </div>
                    </div>
                </div>
                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="state" name="state" class="form-control">
                            <label for="state" class="">State</label>
                            <span>@error('state'){{$message}}@enderror</span>
                        </div>
                    </div>
                </div>
                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                        <!-- <select name="country" id="country">
                               <option value="india">INDIA</option>
                               <option value="uk">UK</option>
                               <option value="us">Us</option>
                               <option value="germany">GERMANY</option>
                       </select> -->
                            <input type="text" id="country" name="country" class="form-control">
                             <label for="country" class="">Country</label> 
                            <span>@error('country'){{$message}}@enderror</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="">Subject</label>
                            <span>@error('subject'){{$message}}@enderror</span>
                        </div>
                    </div>
                </div>
                <!--Grid row-->
                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

<div class="md-form">
    <textarea type="text" id="massage" name="massage" rows="2" class="form-control md-textarea"></textarea>
    <label for="message">Your message</label>
    <!-- <span>@error(''){{$message}}@enderror</span> -->
</div>

</div>
                </div>
                <!--Grid row-->
               

            

            
        <!--Grid column-->
        <div>
                    <button type="submit">Submit Button</button>
                    
                    <button type="reset">Reset Button</button>
                
                </div>
       

        <!--Grid column-->
        

    </div>
    </form>
    
</section>
</div>

<div class="container3">
<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3742.089624115912!2d85.82979859999999!3d20.296557099999998!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1655996647471!5m2!1sen!2sin" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</div>
</div>
</div>
</body></html>
