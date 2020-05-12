@extends('layouts.master')
@section('master')
<aside id="ftco-hero" class="js-fullheight">
    <div class="flexslider js-fullheight">
        <ul class="slides">
           <li style="background-image: url(images/portfolio/img7.jpg);">
               <div class="overlay-gradient"></div>
               <div class="container">
                   <div class="row">
                       <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
                           <div class="slider-text-inner">
                               <h1><strong>About Our Legal Office</strong></h1>
                                <h2>Get to learn more about us for present and future benefits</h2>
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
                <img src="images/portfolio/logoz.jpeg" alt="Image" style=" height: 20em; width: 30em">
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <h2>Ou History</h2>
                <p>Ouma Onyango & Associates is a medium sized law firm established to provide tailor made legal services and support to its clients in a personalised manner.  
                Ouma Onyango & Associates provides comprehensive bespoke quality legal service and its team has the expertise to assist  in addressing and dealing with diverse and complex issues ranging from establishing,
                restructuring, and running to winding up of your business. Our team of legal experts builds solutions that will best suit your needs and assist you in achieving your goals.
                We effectively give our clients opportunity to concentrate on their core business leaving the legal part for us to worry.
                     </p>
            </div>
        </div>
    </div>
</div>

<div id="ftco-about">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center ftco-heading">
                <h2>Our Attorneys</h2>
                <p>Our team comprehensively reviews all the laws and regulations relevant in the client’s business, review the entire client’s legal documentation and agreements, 
                review all proposed legal reforms in the area and attendant implications to the client’s business and accordingly advice the client</p>
            </div>
        </div>
        <div class="row">
            {{-- <div class="col-md-4 col-sm-4 text-center animate-box" data-animate-effect="fadeIn">
                <div class="ftco-staff">
                    <img src="images/portfolio/img.png" alt="Template">
                    <h3>Martin Onyango</h3>
                    <strong class="role">Role: Managing Patner</strong>
                    <strong class="role">Qualifications: Master of Laws (Law Governance and Democracy (cnd)</strong>
                    <strong class="role">Email Address: oumat4@gmail.com</strong>
                    <strong class="role">Membership of Association: Law Society of Kenya,East African Law Society</strong>
                    <ul class="ftco-social-icons">
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                    </ul>
                </div>
            </div> --}}
            <div class="col-md-4 col-sm-4 text-center animate-box" data-animate-effect="fadeIn">
                <div class="ftco-staff">
                    <img src="images/portfolio/img1.png" style=" height: 6em; width: 9em" alt="Template">
                    <h3>Martin Onyango</h3>
                    <span class="role"><strong>Role:</strong> Managing Patner</span>
                    <span class="role"><strong>Qualifications:</strong> Master of Laws (Law Governance and Democracy (cnd)</span>
                    <span class="role"><strong>Email Address:</strong> oumat4@gmail.com</span>
                    <span class="role"><strong>Membership of Association:</strong> Law Society of Kenya,East African Law Society</span>
                    <ul class="ftco-social-icons">
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            {{-- <div class="col-md-4 col-sm-4 text-center animate-box" data-animate-effect="fadeIn">
                <div class="ftco-staff">
                    <img src="images/portfolio/img5.jpg" alt="Template">
                    <h3>Ouma Washington</h3>
                    <strong class="role">Managing Partner, Attorney</strong>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <ul class="ftco-social-icons">
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                    </ul>
                </div>
            </div> --}}
        </div>
    </div>
</div>

<div id="ftco-testimonial" class="ftco-bg-section">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-6 col-md-offset-3 text-center ftco-heading">
                <h2>What are the clients says</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row animate-box">
                    <div class="owl-carousel owl-carousel-fullwidth">
                        <div class="item">
                            <div class="testimony-slide active text-center">
                                <figure>
                                    <img src="images/portfolio/img1.png" alt="user">
                                </figure>
                                <span>Felix Kathambi</span>
                                <blockquote>
                                    <p><em>"I have been very pleased with the concern and attention [Ouma Onyango & Associates] has given to my bussines' case. The firm has been compassionate. Thank you!"</em></p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-slide active text-center">
                                <figure>
                                    <img src="images/portfolio/img3.png" alt="user">
                                </figure>
                                <span>Dorise Mulamwa</span>
                                <blockquote>
                                    <p><em>"Thanks for what you have done. My case has been handled professionally and lovingly."</em></p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-slide active text-center">
                                <figure>
                                    <img src="images/portfolio/img5.jpg" alt="user">
                                </figure>
                                <span>Joyce Njoroge</span>
                                <blockquote>
                                    <p><em>"Keep up the good work, Mr. Martin Onyango and the team; both of you are the best lawyers I have EVER had!"</em></p>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection