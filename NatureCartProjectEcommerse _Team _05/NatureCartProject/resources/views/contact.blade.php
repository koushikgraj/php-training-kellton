@extends('master')
@section('content')
<!-- ##### Contact Area Info Start ##### -->
<div class="contact-area-info section-padding-0-100">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <!-- Contact Thumbnail -->
            <div class="col-12 col-md-6">
                <div class="contact--thumbnail">
                    <img src="img/bg-img/25.jpg" alt="">
                </div>
            </div>

            <div class="col-12 col-md-5">
                <!-- Section Heading -->
                <div class="section-heading">
                    <h2>CONTACT US</h2>
                    <p>We are improving our services to serve you better.</p>
                </div>
                <!-- Contact Information -->
                <div class="contact-information">
                    <p><span>Address:</span> Ramnagar Road,Gurugram</p>
                    <p><span>Phone:</span> 9876543278</p>
                    <p><span>Email:</span> naturescart@gmail.com</p>
                    <p><span>Open hours:</span> Mon - Sun: 8 AM to 9 PM</p>
                    <p><span>Happy hours:</span> Sat: 2 PM to 4 PM</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Contact Area Info End ##### -->

<!-- ##### Contact Area Start ##### -->
<section class="contact-area">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-12 col-lg-5">

                <!-- Section Heading -->
                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif
                <div class="section-heading">
                    <h2>GET IN TOUCH</h2>
                    <p>Send us a message, we will call back later</p>
                </div>
                <!-- Contact Form Area -->

                <div class="contact-form-area mb-100">
                    <form action="contact" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <input name="name" type="text" class="form-control" id="contact-name" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <input name="email" type="email" class="form-control" id="contact-email" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input name="subject" type="text" class="form-control" id="contact-subject" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn alazea-btn mt-15">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <!-- Google Maps -->
                <div class="map-area mb-100">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d57785.57506695255!2d77.12594256058449!3d28.42579585890223!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2aa105c6865a95ab!2sMashrita%20Nature%20Cloud!5e0!3m2!1sen!2sin!4v1658776643133!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"> allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Contact Area End ##### -->

@endsection