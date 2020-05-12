@extends('layouts.master')
@section('master')
<aside id="ftco-hero" class="js-fullheight">
  <div class="flexslider js-fullheight">
    <ul class="slides">
       <li style="background-image: url(images/portfolio/ouma5.jpeg);">
         <div class="overlay-gradient"></div>
         <div class="container">
           <div class="row">
             <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
               <div class="slider-text-inner">
                 <h1><strong>Welcome To Ouma Onyango & Associates Law Firm</strong></h1>
                <h2>Talk to us today.</h2>
               <p><a class="btn btn-primary btn-lg btn-learn" href="{{url('/about-us')}}">Why Us</a></p>
               </div>
             </div>
           </div>
         </div>
       </li>
       <li style="background-image: url(images/portfolio/img8.jpg);">
         <div class="overlay-gradient"></div>
         <div class="container">
           <div class="row">
             <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
               <div class="slider-text-inner">
                 <h1><strong>We defend Your Constitutional Right with Legal Help</strong></h1>
                <h2>Get in touch with us today to get the excellent lawful service.</h2>
               <p><a class="btn btn-primary btn-lg btn-learn" href="{{url('/contact-us')}}">Link Up</a></p>
               </div>
             </div>
           </div>
         </div>
       </li>
       <li style="background-image: url(images/portfolio/img12.jpg);">
         <div class="overlay-gradient"></div>
         <div class="container">
           <div class="row">
             <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
               <div class="slider-text-inner">
                 <h1><strong>We are the best Advocates and Commissioners of Oaths.</strong></h1>
                <h2>We provide the best legal requirements to our clients</h2>
               <p><a class="btn btn-primary btn-lg btn-learn" href="{{url('/cases-won')}}">Our Projects</a></p>
               </div>
             </div>
           </div>
         </div>
       </li>		   	
      </ul>
    </div>
</aside>

<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src="images/portfolio/ouma2.jpeg" alt="Image" class="img-responsive img-rounded">
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-5">
        <h2>Why Us?</h2>
        <p>We use progressive, innovative, strategic,
           practical and result-oriented methodology without compromising on professionalism and the law in rendering our services.
           We also endeavour to seek understanding of our clients and their line of business to enable us offer tailor-made and effective solution to a particular legal issue. In addition, 
           we are flexible in our approach and may visit our clients at home or place of work or business anywhere within the East African Community or outside the region on special circumstances.</p>
      </div>
    </div>
  </div>
</div>




<div id="ftco-counter" class="ftco-counters" style="background-image: url(images/img_bg_3.jpg);" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-3 text-center animate-box">
        <span class="icon"><i class="flaticon-lawyer-1"></i></span>
        <span class="ftco-counter js-counter" data-from="0" data-to="28" data-speed="5000" data-refresh-interval="50"></span>
        <span class="ftco-counter-label">Our Lawyers</span>
      </div>
      <div class="col-md-3 text-center animate-box">
        <span class="icon"><i class="flaticon-courthouse"></i></span>
        <span class="ftco-counter js-counter" data-from="0" data-to="291" data-speed="5000" data-refresh-interval="50"></span>
        <span class="ftco-counter-label">Our Clients</span>
      </div>
      <div class="col-md-3 text-center animate-box">
        <span class="icon"><i class="flaticon-libra"></i></span>
        <span class="ftco-counter js-counter" data-from="0" data-to="952" data-speed="5000" data-refresh-interval="50"></span>
        <span class="ftco-counter-label">Successful Case</span>
      </div>
      <div class="col-md-3 text-center animate-box">
        <span class="icon"><i class="flaticon-police-badge"></i></span>
        <span class="ftco-counter js-counter" data-from="0" data-to="1921" data-speed="5000" data-refresh-interval="50"></span>
        <span class="ftco-counter-label">Honor &amp; Awards</span>
      </div>
    </div>
  </div>
</div>

{{-- <div id="ftco-consult">
  <div class="video ftco-video" style="background-image: url(images/portfolio/ouma1.jpeg);" data-stellar-background-ratio="0.5">
  </div>
  <div class="choose choose-form animate-box">
    <div class="ftco-heading">
      <h2>Free Legal Advice</h2>
    </div>
    <form action="#">
      <div class="row form-group">
        <div class="col-md-6">
          <label for="fname">First Name</label>
          <input type="text" id="fname" class="form-control">
        </div>
        <div class="col-md-6">
          <label for="lname">Last Name</label>
          <input type="text" id="lname" class="form-control">
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-12">
          <label for="email">Email</label>
          <input type="text" id="email" class="form-control">
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-12">
          <label for="subject">Subject</label>
          <input type="text" id="subject" class="form-control">
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-12">
          <label for="message">Message</label>
          <textarea name="message" id="message" cols="20" rows="5" class="form-control"></textarea>
        </div>
      </div>
      <div class="form-group">
        <input type="submit" value="Send Message" class="btn btn-primary">
      </div>

    </form>	
  </div>
</div> --}}

<div id="ftco-blog">
  <div class="container">
    <div class="row animate-box">
      <div class="col-md-8 col-md-offset-2 text-center ftco-heading">
        <h2>Our Portfolio</h2>
        <p>Ou law firm provides comprehensive bespoke quality legal service to assist in addressing and dealing with diverse and complex issues ranging from establishing and restructuring our clients businesses.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-4">
        <div class="blog-featured animate-box">
          <span class="icon"><i class="flaticon-libra"></i></span>
          <h2><strong>Our Mission</strong></h2>
          <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="blog-featured animate-box">
          <span class="icon"><i class="flaticon-libra"></i></span>
          <h2><strong>Our Vision</strong></h2>
          <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="blog-featured animate-box">
          <span class="icon"><i class="flaticon-libra"></i></span>
          <h2><strong>Core Values</strong></h2>
          <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however</p>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection