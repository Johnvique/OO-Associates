@extends('layouts.master')
@section('master')
<aside id="ftco-hero" class="js-fullheight">
    <div class="flexslider js-fullheight">
        <ul class="slides">
           <li style="background-image: url(images/portfolio/img11.jpg);">
               <div class="overlay-gradient"></div>
               <div class="container">
                   <div class="row">
                       <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
                           <div class="slider-text-inner">
                               <h1><strong>Get In Touch</strong></h1>
                                <h2>Talk to us today</h2>
                           </div>
                       </div>
                   </div>
               </div>
           </li>
          </ul>
      </div>
</aside>

<div id="ftco-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-md-push-1 animate-box">
                
                <div class="colorlib-contact-info">
                    <h3>Contact Information</h3>
                    <ul>
                            <p><span class="icon icon-map-marker"></span><span class="text">Ouma Onyango & Associates, <br>Kilimani Road  Plaza-Ground  Floor,<br>Room 101,<br>P.O. Box 19203-00100,<br>Nairobi,Kenya.</span></p>
                            <p>Call: <a href="{{url('tel:020240293')}}"><span class="icon icon-phone"></span><span class="text">020240293</span></a></p>
                            <p>Email: <a href="{{url('mailto:oonassociates@gmail.com')}}"><span class="icon icon-envelope"></span><span class="text">oonassociates@gmail.com</span></a></p>
                    </ul>

                </div>

            </div>
            <div class="col-md-6 animate-box">
                <h3>Send A Message</h3>
                <form action="#">
                    <div class="row form-group">
                        <div class="col-md-6">
                            <!-- <label for="fname">First Name</label> -->
                            <input type="text" id="fname" class="form-control" placeholder="Your firstname">
                        </div>
                        <div class="col-md-6">
                            <!-- <label for="lname">Last Name</label> -->
                            <input type="text" id="lname" class="form-control" placeholder="Your lastname">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <!-- <label for="email">Email</label> -->
                            <input type="text" id="email" class="form-control" placeholder="Your email address">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <!-- <label for="subject">Subject</label> -->
                            <input type="text" id="subject" class="form-control" placeholder="Your subject of this message">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <!-- <label for="message">Message</label> -->
                            <textarea name="message" id="message" cols="20" rows="5" class="form-control" placeholder="Say something about us"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary">
                    </div>

                </form>		
            </div>
        </div>
        
    </div>
</div>
<div id="map" class="lawfirm-map">
    <div class="text-center">
        <h3>Our Location</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.7931066569745!2d36.77721771410114!3d-1.2989055360048256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1a75b51449a9%3A0xa879bd6b4f19a577!2sKilimani%20Rd%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1589095860362!5m2!1sen!2ske" 
        width="750" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</div>
@endsection