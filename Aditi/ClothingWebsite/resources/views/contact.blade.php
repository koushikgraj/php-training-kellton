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
    <div class="container-fluid">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Contact Us</span></h2>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form bg-light p-30">
                    <div id="success"></div>
                    <form  id="contactForm" novalidate="novalidate" action="contact" method="post">
                        @csrf
                        <div class="control-group">
                            <input type="text" name="Name" class="form-control" id="Name" placeholder="Your Name"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" name="Email" class="form-control" id="Email" placeholder="Your Email"
                                required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" name="Subject" class="form-control" id="Subject" placeholder="Subject"
                                required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea name="Message" class="form-control" rows="8" id="Message" placeholder="Message"
                                required="required"
                                data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <input type="submit" value="submit">
                            <!-- <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Send
                                Message</button> -->
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 mb-5">
                <div class="bg-light p-30 mb-30">
                    <iframe style="width: 100%; height: 250px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113274.66106302752!2d77.5406260318286!3d27.47445308712404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397371163d4d5205%3A0x4273a09defe10ea5!2sMathura%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1658206456173!5m2!1sen!2sin"
                    frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="bg-light p-30 mb-3">
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Ram Nagar Krishna Nagar Mathura</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>aditiag2811@gmail.com.com</p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i>8273066977</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

@endsection