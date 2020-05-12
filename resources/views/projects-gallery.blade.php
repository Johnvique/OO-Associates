@extends('layouts.master')
@section('master')
<aside id="ftco-hero" class="js-fullheight">
    <div class="flexslider js-fullheight">
        <ul class="slides">
           <li style="background-image: url(images/portfolio/img6.jpg);">
               <div class="overlay-gradient"></div>
               <div class="container">
                   <div class="row">
                       <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
                           <div class="slider-text-inner">
                               <h1><strong>Project Gallery</strong></h1>
                                <h2>Succesful projects we have worked on,click the image and zoom in.</h2>
                           </div>
                       </div>
                   </div>
               </div>
           </li>
          </ul>
      </div>
</aside>

<div id="ftco-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="blog-featured blog-entry animate-box">
                <a href="{{url('/#')}}"><img class="img-responsive img-rounded" src="{{asset('images/portfolio/ouma1.jpeg')}}" alt=""></a>
                    <h2>We are transparent in our services.</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="blog-featured blog-entry animate-box">
                    <a href="{{url('/#')}}"><img class="img-responsive img-rounded" src="{{asset('images/portfolio/ouma2.jpeg')}}" alt=""></a>
                    <h2>We promote trustworthy.</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="blog-featured blog-entry animate-box">
                    <a href="{{url('/#')}}"><img class="img-responsive img-rounded" src="{{asset('images/portfolio/logo.jpeg')}}" style=" height: 15em; width: 20em" alt=""></a>
                    <h2>Company Logo</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="blog-featured blog-entry animate-box">
                    <a href="{{url('/#')}}"><img class="img-responsive img-rounded" src="{{asset('images/portfolio/ouma4.jpeg')}}" alt=""></a>
                    <h2>We practice honesty in every move.</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="blog-featured blog-entry animate-box">
                    <a href="{{url('/#')}}"><img class="img-responsive img-rounded" src="{{asset('images/portfolio/logoz.jpeg')}}" style=" height: 15em; width: 20em" alt=""></a>
                    <h2>Firms Logo</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="blog-featured blog-entry animate-box">
                    <a href="{{url('/#')}}"><img class="img-responsive img-rounded" src="{{asset('images/portfolio/ouma5.jpeg')}}" alt=""></a>
                    <h2>We are always fighting for justice for all of our clients.</h2>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection