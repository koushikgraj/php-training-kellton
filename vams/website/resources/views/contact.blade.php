@extends('layout')
@section('content')


<!--Section: Contact v.2-->
<section class="mb-4">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="contact" method="POST">
@csrf
                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">Your name</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Your email</label>
                        </div>
                    </div>
                    <!--Grid column-->
                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="date" id="date" name="date" class="form-control">
                            <label for="date" class="">Your DOB</label>
                        </div>
                    </div>
                    <!--Grid column-->
                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="city" name="city" class="form-control">
                            <label for="city" class="">Your city</label>
                        </div>
                    </div>
                    <!--Grid column-->
                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="state" name="state" class="form-control">
                            <label for="state" class="">Your state</label>
                        </div>
                    </div>
                    <!--Grid column-->
                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="country" name="country" class="form-control">
                            <label for="country" class="">Your country</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    

                
                <div class="row">
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="">Subject</label>
                        </div>
                    </div>
                </div>
                

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-50">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Your message</label>
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
<!--Section: Contact v.2-->